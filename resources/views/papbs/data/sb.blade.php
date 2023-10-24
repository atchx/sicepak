@if ($sb != null)
<tr>
    <td>{{ $sb->users->name }}</td>
    <td>{{ $sb->posisi }}</td>
    <td>{{ $sb->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $sb->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/papbs/{{ $sb->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Serdang Bedagai</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif