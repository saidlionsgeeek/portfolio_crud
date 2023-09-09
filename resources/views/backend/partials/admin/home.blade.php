
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{$home->id}}">
    modifier section header and hero
</button>

<!-- Modal -->
<div class="modal fade" id="{{$home->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="{{$home->id}}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="{{$home->id}}Label">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action={{route("home.update",$home->id)}} method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="name">name : </label>
                        <input type="text" name="name" id="name" value="{{ old('name', $home->name )}}">
                    </div>
                    <div>
                        <label for="image">image : </label>
                        <input type="file" name="image" id="image">
                    </div>
                    <div>
                        <label for="image_cover">image_cover: </label>
                        <input type="file" name="image_cover" id="image_cover">
                    </div>
                    <div>
                        <label for="skil_one"> skil 1:</label>
                        <input type="text" name="skil_one" id="skil_one" value="{{ old('skil_one', $home->skil_one) }}">
                    </div>
                    <div>
                        <label for="skil_two"> skil 2:</label>
                        <input type="text" name="skil_two" id="skil_two" value="{{ old('skil_two', $home->skil_two) }}">
                    </div>
                    <div>
                        <label for="skil_three"> skil 3:</label>
                        <input type="text" name="skil_three" id="skil_three" value="{{ old('skil_three', $home->skil_three) }}">
                    </div>
                    <div>
                        <label for="skil_four"> skil 4:</label>
                        <input type="text" name="skil_four" id="skil_four" value="{{ old('skil_four', $home->skil_four) }}">
                    </div>
                    <div>
                        <label for="twitter"> twitter : </label>
                        <input type="url" name="twitter" id="twitter" value="{{ old('twitter', $home->twitter) }}">
                    </div>
                    <div>
                        <label for="facebook"> facebook : </label>
                        <input type="url" name="facebook" id="facebook" value="{{ old('facebook', $home->facebook) }}">
                    </div>
                    <div>
                        <label for="instagram"> instagram : </label>
                        <input type="url" name="instagram" id="instagram" value="{{ old('instagram', $home->instagram) }}">
                    </div>
                    <div>
                        <label for="skype"> skype : </label>
                        <input type="url" name="skype" id="skype" value="{{ old('skype', $home->skype) }}">
                    </div>
                    <div>
                        <label for="linkdin"> linkedin : </label>
                        <input type="url" name="linkdin" id="linkdin" value="{{ old('linkdin', $home->linkdin) }}">
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

