@props(['url'])
<style>




  </style>
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')

    <h1 class="tutor" style="font-size:20px; color: #04AEC4;font-style:bold;">TUTORS WALLAH</h1>




@else
{{ $slot }}
@endif
</a>
</td>
</tr>
