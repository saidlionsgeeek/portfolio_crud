
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{$skill->n1}}">
    modifier section skil
</button>

<!-- Modal -->
<div class="modal fade" id="{{$skill->n1}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="{{$skill->n1}}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="{{$skill->n1}}Label">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action={{route("skill.update",$skill->id)}} method="POST" >
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="info">info : </label>
                        <textarea name="info" id="info" cols="30" rows="10">{{$skill->info}}</textarea>
                    </div>
                    <div>
                        <label for="skill1">skill1 : </label>
                        <input type="text" name="skill1" id="skill1" value="{{ old('skill1', $skill->skill1 )}}">
                    </div>
                    <div>
                        <label for="n1"> n1 :</label>
                        <input type="number" name="n1" id="n1" value="{{ old('n1', $skill->n1) }}">
                    </div>
                    <div>
                        <label for="skill2"> skill2 </label>
                        <input type="text" name="skill2" id="skill2" value="{{ old('skill2', $skill->skill2) }}">
                    </div>
                    <div>
                        <label for="n2"> n2 :</label>
                        <input type="number" name="n2" id="n2" value="{{ old('n2', $skill->n2) }}">
                    </div>
                    <div>
                        <label for="skill3"> skill3 :</label>
                        <input type="text" name="skill3" id="skill3" value="{{ old('skill3', $skill->skill3) }}">
                    </div>
                    <div>
                        <label for="n3"> n3 : </label>
                        <input type="number" name="n3" id="n3" value="{{ old('n3', $skill->n3) }}">
                    </div>
                    <div>
                        <label for="skill4"> skill4 : </label>
                        <input type="skill4" name="skill4" id="skill4" value="{{ old('skill4', $skill->skill4) }}">
                    </div>
                    <div>
                        <label for="n4"> n4 : </label>
                        <input type="number" name="n4" id="n4" value="{{ old('n4', $skill->n4) }}">
                    </div>
                    <div>
                        <label for="skill5"> skill5 : </label>
                        <input type="skill5" name="skill5" id="skill5" value="{{ old('skill5', $skill->skill5) }}">
                    </div>
                    <div>
                        <label for="n5"> n5 : </label>
                        <input type="number" name="n5" id="n5" value="{{ old('n5', $skill->n5) }}">
                    </div>
                    <div>
                        <label for="skill6"> skill6 : </label>
                        <input type="skill6" name="skill6" id="skill6" value="{{ old('skill6', $skill->skill6) }}">
                    </div>
                    <div>
                        <label for="n6"> n6 : </label>
                        <input type="number" name="n6" id="n6" value="{{ old('n6', $skill->n6) }}">
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

