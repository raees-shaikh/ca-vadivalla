<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
<img src="{{asset('images/logo2.png')}}" class="logo" alt="logo" style="width: 150px !important;">
{{-- {{ $slot }} --}}
@endif
</a>
</td>
</tr>
