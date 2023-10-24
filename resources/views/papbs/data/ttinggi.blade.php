@if ($ttinggi != null)
<tr>
    <td>{{ $ttinggi->users->name }}</td>
    <td>{{ $ttinggi->posisi }}</td>
    <td>{{ $ttinggi->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $ttinggi->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/papbs/{{ $ttinggi->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Tebing Tinggi</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif