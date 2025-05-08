@props([
  'containsBorder' => true,
  'textContent' => 'Label text'
])
<div class="rounded-full bg-white flex space-x-* p-3" >
 <p class="bg-accentPrimary p-1 rounded-full h-0.5"></p>
 <p>{{ $textContent }}</p>
</div>
