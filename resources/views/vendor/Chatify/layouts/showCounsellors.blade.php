
@php
    $user = Auth::user();
@endphp
    <table class="messenger-list-item" data-contact="{{ $user->id }}">
        <tr data-action="0">
            <td>
            <div class="avatar av-m"
            style="background-image: url('{{ asset('/storage/'.config('chatify.user_avatar.folder').'/'.$user->avatar) }}');">
            </div>
            </td>
            <td>
                <p data-id="{{ $user->id }}" data-type="user">
                {{ strlen($user->first_name) > 12 ? trim(substr($user->first_name,0,12)).'..' : $user->first_name }}
            </td>

        </tr>
    </table>
    <div class="counsellorList">
        {{-- {{getCounsellors()}} --}}
        
    </div>