@if ($karo != null)
<tr>
    <td>{{ $karo->users->name }}</td>
    <td>{{ $karo->posisi }}</td>
    <td>{{ $karo->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $karo->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/pjs/{{ $karo->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Karo</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif