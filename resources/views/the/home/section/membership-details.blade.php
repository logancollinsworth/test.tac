<div id="detailsWrapper">
    <div class="section-heading">
        <h1>WHAT MAKES US DIFFERENT</h1>
        <h4>{!! $mem_deets_subtitle !!}</h4>
    </div>

    <div id="detailsGrid">
        <div id="details">
            @foreach($membership_details as $idx => $detail)
                <div class="grid-detail {{ $idx == 1 ? 'grid-middle' : '' }}">
                    <i class="{{ $detail['icon'] }} gd-icon"></i>
                    <h2>{!! $detail['title'] !!}</h2>
                    <p>{!! $detail['desc'] !!}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
