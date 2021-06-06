@csrf
<input type="text" name="title" value="{{ old('title',$project->title) }}" placeholder="title..."><br>        

<input type="text" name="url" value="{{ old('url',$project->url) }}" placeholder="url..."><br>        

<textarea name="descripcion" id="" cols="30" rows="10">{{ old('descripcion',$project->descripcion) }}</textarea><br>

<button>{{$textBoton}}</button>