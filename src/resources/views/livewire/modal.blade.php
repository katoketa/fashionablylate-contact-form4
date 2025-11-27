<div class="modal">
    <button wire:click="openModal()" class="modal__open">詳細</button>

    @if($showModal)
    <div class="modal__inner">
        <div class="modal__close">
            <button wire:click="closeModal()" class="modal__close-button">×</button>
        </div>
        <table class="modal-table">
            <tr class="modal-table__row">
                <th class="modal-table__header">お名前</th>
                <td class="modal-table__item">{{ $contact['last_name'] }}{{ $contact['first_name'] }}</td>
            </tr>
            <tr class="modal-table__row">
                <th class="modal-table__header">性別</th>
                <td class="modal-table__item">
                    @switch ($contact['gender'])
                        @case (1)
                            男性
                            @break
                        @case (2)
                            女性
                            @break
                        @case (3)
                            その他
                            @break
                    @endswitch
                </td>
            </tr>
            <tr class="modal-table__row">
                <th class="modal-table__header">メールアドレス</th>
                <td class="modal-table__item">{{ $contact['email'] }}</td>
            </tr>
            <tr class="modal-table__row">
                <th class="modal-table__header">電話番号</th>
                <td class="modal-table__item">{{ $contact['tel'] }}</td>
            </tr>
            <tr class="modal-table__row">
                <th class="modal-table__header">住所</th>
                <td class="modal-table__item">{{ $contact['address'] }}</td>
            </tr>
            <tr class="modal-table__row">
                <th class="modal-table__header">建物名</th>
                <td class="modal-table__item">{{ $contact['building'] }}</td>
            </tr>
            <tr class="modal-table__row">
                <th class="modal-table__header">お問い合わせの種類</th>
                <td class="modal-table__item">{{ $contact['category']['content'] }}</td>
            </tr>
            <tr class="modal-table__row">
                <th class="modal-table__header">お問い合わせ内容</th>
                <td class="modal-table__item">{{ $contact['detail'] }}</td>
            </tr>
        </table>
        <form class="contact-delete" action="/delete" method="post">
            @method('DELETE')
            @csrf
            <input type="hidden" name="id" value="{{ $contact['id'] }}">
            <button class="contact-delete__submit" type="submit">削除</button>
        </form>
    </div>
    @endif
</div>
