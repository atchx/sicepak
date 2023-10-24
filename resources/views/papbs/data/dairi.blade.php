@if ($dairi != null)
<tr>
    <td>{{ $dairi->users->name }}</td>
    <td>{{ $dairi->posisi }}</td>
    <td>{{ $dairi->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $dairi->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/papbs/{{ $dairi->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Dairi</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif