<x-layouts.app :title="__('Etiquetas')">
	<div class="mb-8 flex justify-between items-center">
		<flux:breadcrumbs>
			<flux:breadcrumbs.item :href="route('dashboard')">Dashboard</flux:breadcrumbs.item>
			<flux:breadcrumbs.item :href="route('admin.tags.index')">Etiquetas</flux:breadcrumbs.item>
			<flux:breadcrumbs.item>Nuevo</flux:breadcrumbs.item>
		</flux:breadcrumbs>
	</div>

	<div class="card">
		<form action="{{ route('admin.tags.store')}}" method="POST">
			@csrf
			<flux:input label="Nombre" name="name" value="{{ old('name') }}" placeholder="Escribe el nombre de la etiqueta" class="mb-4"/>
			<div class="flex justify-end">
				<flux:button variant="primary" type="submit">
					Enviar
				</flux:button>
			</div>
		</form>
	</div>

</x-layouts.app>