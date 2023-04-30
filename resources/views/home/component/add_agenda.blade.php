<div id="dialog" style="display:none">
    <div class="dialog-body">
        <form method="POST" id="dayClick" action="{{route('agenda.tambah')}}">
            @csrf
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Event Title">
            </div>
            <div class="form-group">
                <label for="">Lokasi</label>
                <input type="text" class="form-control" name="location" placeholder="Event Title">
            </div>
            <div class="form-group">
                <label for="">Start</label>
                <input type="date" class="form-control" name="start" placeholder="Event Title">
            </div>
            <div class="form-group">
                <label for="">End</label>
                <input type="date" class="form-control" name="end" placeholder="Event Title">
            </div>
            <div class="form-group">
                <label for="">Start Time</label>
                <input type="time" class="form-control" name="start_time" placeholder="Event Title">
            </div>
            <div class="form-group">
                <label for="">End Time</label>
                <input type="time" class="form-control" name="end_time" placeholder="Event Title">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    Add Agenda
                </button>
            </div>
        </form>
    </div>