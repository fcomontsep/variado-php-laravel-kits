<x-layouts.app :title="__('Posts')">

	@push('css')
		<!-- Include stylesheet -->
		<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
	@endpush

	<div class="mb-8 flex justify-between items-center">
		<flux:breadcrumbs>
			<flux:breadcrumbs.item :href="route('dashboard')">Dashboard</flux:breadcrumbs.item>
			<flux:breadcrumbs.item :href="route('admin.posts.index')">Posts</flux:breadcrumbs.item>
			<flux:breadcrumbs.item>Editar</flux:breadcrumbs.item>
		</flux:breadcrumbs>
	</div>
	<form action="{{ route('admin.posts.update', $post)}}" method="POST" enctype="multipart/form-data" class="space-y-4">
		@csrf
		@method('PUT')
		<div class="relative">

			<img id="imgPreview" class="w-full aspect-video object-cover object-center" src="{{ $post->image_path ? Storage::url($post->image_path) : "https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg"}}">
			<div class="absolute top-4 right-4">
				<label class="bg-white px-4 py-2 rounded-lg cursor-pointer">
					Cambiar imagen
					<input class="hidden" type="file" name="image" accepts="image/*" onchange="preview_image(event, '#imgPreview')">
				</label>
			</div>	
		</div>
		
		<div class="card">

			<flux:input label="Título" name="title" value="{{ old('title', $post->title) }}" placeholder="Escribe el título del post" class="mb-4"/>
			<flux:input id="slug" label="Slug" name="slug" value="{{ old('slug', $post->slug) }}" placeholder="Escribe el slug del post" class="mb-4"/>
			
			<flux:select label="Categoria" name="category_id" placeholder="Escoge la categoría...">
				@foreach ($categories as $category)
					<flux:select.option value="{{ $category->id }}" :selected="$category->id == old('category_id', $post->category_id)">{{ $category->name }}</flux:select.option>
				@endforeach
			</flux:select>

			<flux:textarea label="Resumen" name="excerpt">{{old('excerpt', $post->excerpt)}}</flux:textearea>

			<div class=mb-4>
				<p class="font-medium text-sm mb-1">
					Contenido
				</p>	
				<div id="editor">{!! old('content', $post->content) !!}</div>
				<textarea class="hidden" name="content" id="content">{{old('content', $post->content)}}</textarea>
			</div>

			<div>
				<p class="text-sm font-medium mb-1">Etiquetas</p>
				<ul>
					@foreach ($tags as $tag)
						<li>
							<label class="flex items-center space-x-2">
								<input type="checkbox" name="tags[]" value="{{ $tag->id }}"
								@checked(in_array($tag->id, old('tags',$post->tags->pluck('id')->toArray())))>
								{{  $tag->name }}
							</label>
						</li>
					@endforeach
				</ul>	
			</div>
			<div>
				<p class="text-sm font-medium mb-1">Estado</p>
				<div class="mt-4 flex space-x-2">
					<label>
						<input type="radio" name="is_published" value="0" @checked(old('is_published', $post->is_published) == 0)>
						<span class="ml-2">
							No publicado
						</span>
					</label>
					<label>
						<input type="radio" name="is_published" value="1" @checked(old('is_published', $post->is_published) == 1)>
						<span class="ml-2">
							Publicado
						</span>
					</label>
				</div>
			</div>

			<div class="flex justify-end">
				<flux:button variant="primary" type="submit">
					Enviar
				</flux:button>
			</div>	
		</div>
	</form>
	@push('js')
		<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
		<script>
			const quill = new Quill('#editor', {
				theme: 'snow'
			});
			quill.on('text-change', function() {
				document.querySelector('#content').value = quill.root.innerHTML;
			});
		</script>
	@endpush
</x-layouts.app>