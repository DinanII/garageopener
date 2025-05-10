@extends('layouts.app')
<!-- @include('components.card') -->

@section('content')
  <!-- Hero section -->
  <section class="bg-softPink flex rounded-b-xl overflow-hidden">
    <x-textblock class="w-1/2" labelText="Introduction"
    description="At Lyfter, we make smart devices to automate your home. Convenient, secure and customizable."
    mainTitle="Everyday Convenience" mainTitleClasses="{{ 'text-7xl'  }}" primaryButtonText="Buy Lyfter Garage"
    secondaryButtonText="Download the app"></x-textblock>
    <img class="w-1/2 rounded-tl-full overflow-hidden" src="https://picsum.photos/600/600">
  </section>

  <!-- Cards section -->
  <section class="flex p-2">
    <x-card cardTitle="Effortless Security"
    cardDescription="Unlock peace of mind with our garage door opener, effortless convenience coupled with robust security at the touch of a button.">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#00D1B2" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
</svg>

    </x-card>
    <x-card cardTitle="Seamless Integration"
    cardDescription="Elevate your life with our garage door opener, seamless integration into your smart home for a connected living experience.">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#00D1B2" class="bi bi-house-fill"
      viewBox="0 0 16 16">
      <path
      d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
      <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
    </svg>

    </x-card>
    <x-card cardTitle="Reliability Redefined"
    cardDescription="Trust in consistent performance, our garage door opener is engineered for enduring reliability, simplifying your daily routine.">
    <svg class="w-2/3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="#00cfb3" d="M0 488L0 171.3c0-26.2 15.9-49.7 40.2-59.4L308.1 4.8c7.6-3.1 16.1-3.1 23.8 0L599.8 111.9c24.3 9.7 40.2 33.3 40.2 59.4L640 488c0 13.3-10.7 24-24 24l-48 0c-13.3 0-24-10.7-24-24l0-264c0-17.7-14.3-32-32-32l-384 0c-17.7 0-32 14.3-32 32l0 264c0 13.3-10.7 24-24 24l-48 0c-13.3 0-24-10.7-24-24zm488 24l-336 0c-13.3 0-24-10.7-24-24l0-56 384 0 0 56c0 13.3-10.7 24-24 24zM128 400l0-64 384 0 0 64-384 0zm0-96l0-80 384 0 0 80-384 0z"/></svg>

    </x-card>
  </section>

  <x-button background="bg-transparent">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-arrow-up-right"
    viewBox="0 0 16 16">
    <path fill-rule="evenodd"
      d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
    </svg>
  </x-button>
  <x-button :primary="false">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-arrow-up-right"
    viewBox="0 0 16 16">
    <path fill-rule="evenodd"
      d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
    </svg>
  </x-button>
  <x-label />
@endsection
