<div id="detail-dialog" style="visibility:hidden">
    <div class="detail-dialog-body">
        <form action="" id="dayClick" action="{{route('fullcalenderAjax')}}">
            @csrf
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" id="title" class="form-control" name="title" placeholder="Event Title" disabled>
            </div>
            <div class="form-group">
                <label for="">Location</label>
                <input type="text" id="location" class="form-control" name="title" placeholder="Event Title" disabled>
            </div>
            <div class="form-group">
                <label for="">Start</label>
                <input type="text" id="start" class="form-control" name="start" placeholder="Event Title" disabled>
            </div>
            <div class="form-group">
                <label for="">End</label>
                <input type="text" id="end" class="form-control" name="end" placeholder="Event Title" disabled>
            </div>
            <div class="form-group">
                <label for="">Start Time</label>
                <input type="text" id="start_time" class="form-control" name="start_time" placeholder="Event Title" disabled>
            </div>
            <div class="form-group">
                <label for="">End Time</label>
                <input type="text" id="end_time" class="form-control" name="end_time" placeholder="Event Title" disabled>
            </div>
        </form>
    </div>
</div>