@if ($lb != null)
<tr>
    <td>{{ $lb->users->name }}</td>
    <td>{{ $lb->posisi }}</td>
    <td>{{ $lb->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $lb->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/papbs/{{ $lb->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Labuhanbatu</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif