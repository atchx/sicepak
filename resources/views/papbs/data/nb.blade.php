@if ($nb != null)
<tr>
    <td>{{ $nb->users->name }}</td>
    <td>{{ $nb->posisi }}</td>
    <td>{{ $nb->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $nb->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/papbs/{{ $nb->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Nias Barat</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif