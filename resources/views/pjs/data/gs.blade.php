@if ($gs != null)
<tr>
    <td>{{ $gs->users->name }}</td>
    <td>{{ $gs->posisi }}</td>
    <td>{{ $gs->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $gs->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/pjs/{{ $gs->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Gunungsitoli</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif