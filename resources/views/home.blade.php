@extends('layouts.app')
@section('content')
    @include('section.hero')
    @include('section.sejarah')
    @include('section.profil')
    @include('section.struktur')
    <div class="flex flex-col items-center justify-center w-full my-6 sm:flex-row">
        <div
            class="p-2 transition-all border-2 border-opacity-0 border-dashed rounded-lg w-60 h-60 group hover:border-opacity-100 border-emerald-600">
            <div
                class="w-full h-full p-4 text-white transition-all ease-in-out rounded-lg group-hover:bg-gradient-to-br group-hover:from-emerald-600 group-hover:to-emerald-800 bg-emerald-600">
                <div class="flex flex-col justify-center w-full h-full gap-2 m-auto">
                    <span class="text-3xl font-bold text-center transition-all duration-500 ease-in opacity-0"
                        id="count-alumni">{{ $alumni }}</span>
                    <span class="text-lg font-semibold text-center">Alumni Terdaftar</span>
                </div>
            </div>
        </div>
    </div>
    @include('section.news')
    @include('layouts.footer')
@endsection
@section('script')
    <script>
        $(window).scroll(function() {
            var elementTop = $('#count-alumni').offset().top;
            var windowHeight = $(window).height();
            var scrollTop = $(window).scrollTop();

            if (scrollTop > elementTop - windowHeight + 100) {
                // Start the count-up animation
                $('#count-alumni').each(function() {
                    $(this).prop('Counter', 0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 1500,
                        easing: 'swing',
                        step: function(now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });

                // Show the element
                $('#count-alumni').css('opacity', '1');

                // Unbind the scroll event to prevent the animation from triggering again
                $(window).off('scroll');
            }
        });
    </script>
@endsection
