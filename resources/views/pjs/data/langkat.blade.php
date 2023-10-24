@if ($langkat != null)
<tr>
    <td>{{ $langkat->users->name }}</td>
    <td>{{ $langkat->posisi }}</td>
    <td>{{ $langkat->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $langkat->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/pjs/{{ $langkat->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Langkat</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif