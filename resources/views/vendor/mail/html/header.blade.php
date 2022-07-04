<tr>
<td class="header">
<a href="https://angelofrancisco.site/" style="display: inline-block;">
@if (trim($slot) === 'Angelo Francisco')
<img src="https://angelofrancisco.site/storage/imagens/AngeloFranciscoClaro.png" class="logo" alt="Angelo Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
