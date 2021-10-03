	{!! form()->text('title')->label('Title')->required() !!}
	{!! form()->textarea('content')->label('Content')->required() !!}
	{!! form()->dropdown('user_id', $userData)->label('Author')->required() !!}
{!! form()->action([
    form()->submit('Simpan'),
    form()->link('Batal', route('modules::post.index'))
]) !!}
