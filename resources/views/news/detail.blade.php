@extends('layouts.app')
@section('content')
    <main class="h-full min-h-screen bg-gradient-to-b from-emerald-600 from-75% to-emerald-700 py-6 px-4 pb-24">
        <span class="inline-block w-full text-2xl text-center text-white sm:text-5xl md:text-3xl font-batik">
            {{ $news->title }}
        </span>
        <div class="w-full mx-auto overflow-hidden rounded-lg sm:w-10/12 h-64 sm:h-[500px] mt-8 mb-4">
            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}"
                class="object-cover object-center w-full h-full">
        </div>
        <div class="flex justify-between w-full py-1 mx-auto border-b-2 border-white sm:w-10/12">
            <div class="flex items-center text-sm font-semibold text-white gap-x-2">
                <i class="fa-solid fa-calendar-days"></i>
                <span class="">{{ date('d M Y', strtotime($news->created_at)) }}</span>
            </div>
            <div class="flex items-center text-sm font-semibold text-white gap-x-2">
                <i class="fa-solid fa-pencil"></i>
                <span class="">{{ $news->author->name }}</span>
            </div>
        </div>
        <div class="flex justify-between w-full py-2 mx-auto text-white sm:w-10/12">
            {!! $news->caption !!}
        </div>
        <div class="flex flex-col w-full mx-auto mt-6 mb-3 sm:w-10/12">
            <div class="flex items-center py-1 text-sm font-semibold text-white border-b border-white gap-x-2">
                <i class="fa-solid fa-comments"></i>
                <span class="inline-block ">Komentar</span>
            </div>
            @if (count($news->comments) <= 0)
                <span class="mt-1 text-sm italic font-semibold text-white">Tidak Ada Komentar</span>
            @endif
        </div>
        @foreach ($news->comments as $comment)
            <div class="flex flex-col w-full pb-2 mx-auto mb-4 border-b border-gray-100/30 gap-x-2 gap-y-1 sm:w-10/12">
                <div class="flex items-center gap-x-2">
                    <div class="flex flex-col text-xs font-bold">
                        <span class="text-gray-300 ">{{ $comment->user->name }} | {{ $comment->time }} </span>
                    </div>
                </div>
                <div class="flex flex-col w-full text-white gap-y-2 sm:justify-between">
                    <div class="w-full sm:w-8/12">{!! $comment->message !!}</div>
                    <div class="flex text-sm gap-x-3">
                        <button class="p-1 text-white transition-all rounded bg-white/20 hover:bg-white/30 reply-btn"
                            comment="{{ $comment->id }}">Reply</button>
                        @if (count($comment->replies))
                            <button class="p-1 text-white transition-all rounded bg-white/20 hover:bg-white/30 reply-toggle"
                                comment="{{ $comment->id }}">Lihat
                                Balasan <i class="ml-2 fa-solid fa-caret-down arrow"></i>
                            </button>
                        @endif
                    </div>
                    @if (count($comment->replies))
                        <div class="hidden w-[95%] px-3 py-1 mt-1 ml-auto rounded bg-emerald-500/50 replies"
                            id="reply-{{ $comment->id }}">
                            @foreach ($comment->replies as $reply)
                                <div class="flex items-center my-3 border-b gap-x-2">
                                    <div class="flex flex-col font-bold gap-y-2">
                                        <span class="text-xs text-gray-300">{{ $reply->user->name }} | {{ $reply->time }}
                                        </span>
                                        <div class="w-full font-normal sm:w-8/12">{!! $reply->message !!}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    <div class="my-1 w-[95%] ml-auto hidden" id="form-reply-{{ $comment->id }}">
                        <form action="{{ route('reply.store') }}" method="post" class="flex w-full gap-x-1">
                            @csrf
                            <input type="hidden" name="news_id" value="{{ $news->id }}">
                            <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                            <input type="text" name="message"
                                class="w-10/12 text-white bg-transparent border-0 border-b border-white sm:w-full grow focus:outline-0 focus:ring-0 focus:border-b-2 focus:border-white placeholder:text-white/50"
                                placeholder="Balas Komentar {{ $comment->user->name }}" required>
                            </input>
                            <button
                                class="inline-block px-2 py-1 mt-1 transition-all bg-white rounded cursor-pointer hover:bg-gray-300 aspect-square">
                                <i class="fa-solid fa-paper-plane text-emerald-600"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="flex flex-col w-full pb-2 mx-auto my-8 gap-x-2 gap-y-1 sm:w-10/12">
            <form action="{{ route('comment.store') }}" method="post" class="flex w-full gap-x-1">
                @csrf
                <input type="hidden" name="news_id" value="{{ $news->id }}">
                <input type="text" name="message"
                    class="w-10/12 text-white bg-transparent border-0 border-b border-white sm:w-full grow focus:outline-0 focus:ring-0 focus:border-b-2 focus:border-white placeholder:text-white/50"
                    placeholder="Tuliskan Komentar Anda" required>
                </input>
                <button
                    class="inline-block px-2 py-1 mt-1 transition-all bg-white rounded cursor-pointer hover:bg-gray-300 aspect-square">
                    <i class="fa-solid fa-paper-plane text-emerald-600"></i>
                </button>
            </form>
        </div>

    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.reply-toggle').on('click', function() {
                let comment = $(this).attr('comment');
                // console.log(comment);
                $(`#reply-${comment}`).toggleClass('hidden');
                $('.arrow').toggleClass('fa-caret-down');
                $('.arrow').toggleClass('fa-caret-up');
            });

            $('.reply-btn').on('click', function() {
                let comment = $(this).attr('comment');
                $(`#form-reply-${comment}`).toggleClass('hidden');

                $('html, body').animate({
                    scrollTop: $(`#form-reply-${comment}`).offset().top
                }, 500);
            });
        });
    </script>
@endsection
