@props([
  'labelText' => 'Label',
  'mainTitle' => 'This is a large title',
  'mainTitleClasses' => '',// text-8xl
  'description' => 'This is a longer description for this textblock.',
  'primaryButtonText' => 'NO_DISPLAY',
  'primaryButtonIcon' => '',
  'secondaryButtonText' => 'NO_DISPLAY',
  'secondaryButtonIcon' => '',
  'buttonClasses' => ''
])
<div class="p-13" >
  <x-label :textContent="$labelText"></x-label>
  <h3 class="font-extrabold max-w-7/12 h-fit {{ $mainTitleClasses }}" >{{ $mainTitle }}</h3>
  <p class='my-6 max-w-7/12' >{{ $description }}</p>
  <div class="flex" >
  @if($primaryButtonText !== 'NO_DISPLAY')
  <x-button :primary="true" :text="$primaryButtonText">
    {!! $primaryButtonIcon !!}
  </x-button>
  @endif
  @if($secondaryButtonText !== 'NO_DISPLAY')
  <x-button :primary="false" :text="$secondaryButtonText">
    {!! $secondaryButtonIcon !!}
  </x-button>
  @endif
  </div>

</div>
