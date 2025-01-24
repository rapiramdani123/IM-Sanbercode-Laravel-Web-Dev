<form action="/cast" method="POST">
        @csrf
        <div class="mb-3">
          <label >name cast</label>
          <input type="txt" name="name" class="form-control" >
          
        </div>

        @error('name')
        <div class="alert alert.danger">{{$message}}</div>
        @enderror

        <div class="mb-3">
            <label >age cast</label>
            <input type="integer" name="age" class="form-control" >
        </div>

        @error('age')
        <div class="alert alert.danger">{{$message}}</div>
        @enderror

        <div class="mb-3">
          <label >bio cast</label>
          <textarea name="bio" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>

        @error('bio')
        <div class="alert alert.danger">{{$message}}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
      
</form>
@