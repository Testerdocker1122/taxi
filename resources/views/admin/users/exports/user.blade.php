<table class="table table-hover">
    <thead>
        <tr>
            <th> @lang('view_pages.s_no')</th>
            <th> @lang('view_pages.date')</th>
            <th> @lang('view_pages.name')</th>
            <th> @lang('view_pages.email')</th>
            <th> @lang('view_pages.mobile')</th>
            <th> @lang('view_pages.address')</th>
            <th> @lang('view_pages.status')</th>
        </tr>
    </thead>

    <tbody>
        @php $i= 1; @endphp

        @forelse($results as $key => $result)
            <tr>
                <td>{{ $i++ }} </td>
                <td>{{ $result->created_at->format("m/d/Y") }} </td>
                <td> {{ $result->name }}</td>
                <td>{{ $result->email }}</td>
                <td>{{ $result->mobile }}</td>
                <td>{{ $result->userDetails ? $result->userDetails->address : '-' }}</td>
                @if ($result->active)
                    <td><span class="label label-success">@lang('view_pages.active')</span></td>
                @else
                    <td><span class="label label-danger">@lang('view_pages.inactive')</span></td>
                @endif
            </tr>
        @empty
            <tr>
                <td colspan="11">
                    <h4 class="text-center" style="color:#333;font-size:25px;">@lang('view_pages.no_data_found')</h4>
                </td>
            </tr>
        @endforelse

    </tbody>
</table>
