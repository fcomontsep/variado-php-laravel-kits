<x-layouts.app :title="__('Categorías')">
	<div class="mb-8 flex justify-between items-center">
		<flux:breadcrumbs>
			<flux:breadcrumbs.item :href="route('dashboard')">Dashboard</flux:breadcrumbs.item>
			<flux:breadcrumbs.item :href="route('admin.categories.index')">Categorías</flux:breadcrumbs.item>
			<flux:breadcrumbs.item>Editar</flux:breadcrumbs.item>
		</flux:breadcrumbs>
	</div>

	<div class="card">
		<form action="{{ route('admin.categories.update', $category)}}" method="POST">
			@csrf
			@method('PUT')
			<flux:input label="Nombre" name="name" value="{{ old('name', $category->name) }}" placeholder="Escribe el nombre de la categoría" class="mb-4"/>
			<div class="flex justify-end">
				<flux:button variant="primary" type="submit">
					Enviar
				</flux:button>
			</div>
		</form>
	</div>

</x-layouts.app>