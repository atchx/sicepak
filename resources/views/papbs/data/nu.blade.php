@if ($nu != null)
<tr>
    <td>{{ $nu->users->name }}</td>
    <td>{{ $nu->posisi }}</td>
    <td>{{ $nu->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $nu->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/papbs/{{ $nu->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Nias Utara</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif