<x-layout>
    <form action="{{ route('addpg') }}" method="POST">
        @csrf
          <div class="mb-3">
              <label for="bname" class="form-label">Book Name</label>
              <input type="text" class="form-control" id="bname" name="bname">
              @error('title')
                <div span class="text-danger">{{$message}}</span>
              @enderror
  
          </div>
          <div class="mb-3">
            <label for="uname" class="form-label">Author Name</label>
            <input type="text" class="form-control" id="uname" name="uname">
            @error('title')
              <div span class="text-danger">{{$message}}</span>
            @enderror

            <div class="mb-3">
                <label for="bname" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price">
                @error('title')
                  <div span class="text-danger">{{$message}}</span>
                @enderror
    
            </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  
</x-layout>