
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{$about->age}}">
    modifier section about
</button>

<!-- Modal -->
<div class="modal fade" id="{{$about->age}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="{{$about->age}}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="{{$about->age}}Label">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action={{route("about.update",$about->id)}} method="POST" >
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="birthday">birthday : </label>
                        <input type="text" name="birthday" id="birthday" value="{{ old('birthday', $about->birthday )}}">
                    </div>
                    <div>
                        <label for="website"> website :</label>
                        <input type="text" name="website" id="website" value="{{ old('website', $about->website) }}">
                    </div>
                    <div>
                        <label for="phone"> phone </label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone', $about->phone) }}">
                    </div>
                    <div>
                        <label for="city"> city :</label>
                        <input type="text" name="city" id="city" value="{{ old('city', $about->city) }}">
                    </div>
                    <div>
                        <label for="age"> age :</label>
                        <input type="text" name="age" id="age" value="{{ old('age', $about->age) }}">
                    </div>
                    <div>
                        <label for="degree"> degree : </label>
                        <input type="text" name="degree" id="degree" value="{{ old('degree', $about->degree) }}">
                    </div>
                    <div>
                        <label for="email"> email : </label>
                        <input type="email" name="email" id="email" value="{{ old('email', $about->email) }}">
                    </div>
                    <div>
                        <label for="freelance"> freelance : </label>
                        <input type="text" name="freelance" id="freelance" value="{{ old('freelance', $about->freelance) }}">
                    </div>
                    <div>
                        <label for="info"> info</label>
                        <textarea name="info" id="info" cols="30" rows="10">{{$about->info}}</textarea>
                    </div>
                    <button type="submit"> update</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

