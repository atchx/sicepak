@if ($lbu != null)
<tr>
    <td>{{ $lbu->users->name }}</td>
    <td>{{ $lbu->posisi }}</td>
    <td>{{ $lbu->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $lbu->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/apbds/{{ $lbu->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Labuhanbatu Utara</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif