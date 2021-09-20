@extends('layouts.tailwind.guest')

<div class="relative min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8  bg-no-repeat bg-cover "
    style="background-image: url(https://envato-shoebox-0.imgix.net/d7f2/aaa1-52ef-4350-8b70-5c8d5a43c490/pasta15_b291.jpg?auto=compress%2Cformat&fit=max&mark=https%3A%2F%2Felements-assets.envato.com%2Fstatic%2Fwatermark2.png&markalign=center%2Cmiddle&markalpha=18&w=1600&s=6ac0c55dcb0ab7b124c08eeb8d42a441);">
    <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
    <div class="sm:max-w-5xl w-full p-10 bg-gray-100 rounded-xl z-10">
        <div class="text-center">
            <h2 class="mt-5 text-3xl font-bold text-gray-900">
                Verify your email
            </h2>
            <p class="mt-2 text-base text-gray-400">you will need to verify your email to complete registration</p>
        </div>
        <div class="mt-5 md:px-80">
            <img src="/assets/media/svg/illustrations/email-verify.png" width="300">
        </div>
        <div class="mt-8 md:px-36 text-base text-center text-gray-600">
            {{ __('An email has been sent to your registered mail address with a link to verify your account. If you have not receive the email after a few minutes, please check your spam folder') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="md:px-40 mt-4 text-center font-bold text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address.') }}
            </div>
        @endif

        <div class="mt-8 md:px-72 flex items-center justify-center">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <div>
                    <button type="submit" class="px-5 py-3 bg-blue-700 text-white font-bold text-base rounded-xl">
                        {{ __('Resend Email') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .has-mask {
        position: absolute;
        clip: rect(10px, 150px, 130px, 10px);
    }

</style>
