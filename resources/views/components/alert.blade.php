@props(['message'])
<div class="my-8 bg-white p-2 text-purple-700 border-l-8 border-purple-400 font-mono font-bold w-full flex items-center gap-2 transform -rotate-1">
	<svg class="w-5 h-5 fill-purple-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
		<path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM184 336h24V272H184c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
	</svg>
	{{ $message }}
</div>
