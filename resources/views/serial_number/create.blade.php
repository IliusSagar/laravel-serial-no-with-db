<div class="container">
    <h1>Create Serial Number</h1>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('serial_number.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="serial_number">Serial Number</label>

            @php 
                  $lastSerialNumber = DB::table('serial_numbers')->orderBy('id', 'desc')->first();
            @endphp


<input type="text" id="serial_number" name="serial_number" class="form-control" value="CS-PO-<?php echo isset($lastSerialNumber->serial_number) ? ($lastSerialNumber->serial_number +1) : 0; ?>" readonly>



        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>

