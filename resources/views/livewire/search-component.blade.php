<div class="w-50 m-auto mt-5">
    <div class="mb-5">
        <input type="text" class="form-control" wire:model.live='search' />

    </div>
    @if ($posts->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            @foreach ($posts as $post)
                <tbody>
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->name }}</td>

                    </tr>
                </tbody>
            @endforeach
        </table>
    @endif
    <div>{{ $posts->links() }}</div>
</div>
