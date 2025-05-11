@props([
  'containsBorder' => true,
  'textContent' => 'Label text',
  'fontSize' => 'text-[0.750rem]',
])
<span class="rounded-full bg-white flex space-x-* p-2 w-fit h-fit items-center justify-center {{ $containsBorder == true ? 'border-borderAccent border-2 ' : '' }}" >
<!-- Decorational circle -->
<p class="bg-accentPrimary p-1 rounded-full h-0.5 mr-2"></p>
<!-- Text with custom font size -->
<p class="{{ $fontSize }} font-bold" >{{ $textContent }}</p>
</span>
