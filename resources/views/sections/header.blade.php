<header class=" bg-softPink">
  <!-- Content Wrapper -->
  <div class="w-11/12 mx-auto flex justify-between py-3">
    <img src="{{ get_template_directory_uri() }}/resources/images/LyfterLogo.png" alt="Lyfter Logo" class="h-1/3">
    <div class="flex justify-around w-5/12 h-fit">
      <div class="flex">
        <x-button fSize="text-sm" text="Lyfter Garage" background="bg-transparent"></x-button>
        <x-button fSize="text-sm" text="Lyfter Doorbell" background="bg-transparent"></x-button>
      </div>
      <div class="flex">
        <x-button fSize="text-sm" text="Support" background="bg-transparent"></x-button>
        <x-button fSize="text-sm" text="Download the app" primary="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-download"
            viewBox="0 0 16 16">
            <path
              d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
            <path
              d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
          </svg>
        </x-button>
      </div>
    </div>
  </div>
</header>
