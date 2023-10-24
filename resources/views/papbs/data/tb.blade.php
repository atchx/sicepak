@if ($tb!= null)
<tr>
    <td>{{ $tb->users->name }}</td>
    <td>{{ $tb->posisi }}</td>
    <td>{{ $tb->tanggal }}</td>
    <td>
      <a href="{{ asset('storage/' . $tb->files) }}" class="btn btn-primary btn-icon-text btn-sm" target="_blank">
        <i class="ti-file btn-icon-prepend"></i>
        View
      </a>
    </td>
    <td>
      <a href="/papbs/{{ $tb->user_id }}" class="btn btn-info btn-icon-text btn-sm">
        Details
        <i class="ti-file btn-icon-append"></i>
      </a>
    </td>
  </tr>
@else
<tr>
    <td>Tanjung Balai</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
@endif