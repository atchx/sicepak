@if ($sibolga != null)
<tr>
    <td>{{ $sibolga->users->name }}</td>
    <td>{{ $sibolga->posisi }}</td>
    <td>{{ $sibolga->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $sibolga->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/papbs/{{ $sibolga->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Sibolga</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif