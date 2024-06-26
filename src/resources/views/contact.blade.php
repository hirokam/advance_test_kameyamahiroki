@extends('layouts.app')

@section('title')
    <title>お問い合わせ</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" >
@endsection


@section('header')
    <div class="header__title-frame">
        <h1 class="header__title">FashionablyLate</h1>
    </div>

@endsection


@section('content')
    <div class="content__title-frame">
        <h2 class="content__title">Contact</h2>
    </div>
    <div class="content__inner-frame">
        <form action="/confirm" method="post">
        @csrf
            <div class="inner__items">
                <div class="inner__item-title">
                    お名前<span>※</span>
                </div>
                <div class="inner__item-text fullname">
                    <div class="last-name-group">
                        <input type="text" name="last_name" value="{{old('last_name')}}" placeholder="例:山田" class="last-name">
                        @error('last_name')
                        <p>{{$errors->first('last_name')}}</p>
                        @enderror
                    </div>
                    <div class="first-name-group">
                        <input type="text" name="first_name" value="{{old('first_name')}}" placeholder="例:太郎" class="first-name">
                        @error('first_name')
                        <p>{{$errors->first('last_name')}}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="inner__items">
                <div class="inner__item-title">
                    性別<span>※</span>
                </div>
                <div class="gender-group">
                    <div class="inner__item-radio">
                        <label for=""><input type="radio" name="gender" value="1" class="male" checked="checked">男性</label>
                        <label for=""><input type="radio" name="gender" value="2" class="female">女性</label>
                        <label for=""><input type="radio" name="gender" value="3" class="others">その他</label>
                    </div>
                    @error('gender')
                    <p>{{$errors->first('gender')}}</p>
                    @enderror
                </div>
            </div>

            <div class="inner__items">
                <div class="inner__item-title">
                    メールアドレス<span>※</span>
                </div>
                <div class="inner__item-text">
                    <div class="email-group">
                        <input type="email" name="email" value="{{old('email')}}" placeholder="例:test@example.com" class="email">
                        @error('email')
                        <p>{{$errors->first('email')}}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="inner__items">
                <div class="inner__item-title">
                    電話番号<span>※</span>
                </div>
                <div class="inner__item-text">
                    <div class="tel-group">
                        <input type="tel" name="tel1" value="" placeholder="080" class="tel">
                        <span>-</span>
                        <input type="tel" name="tel2" value="" placeholder="1234" class="tel">
                        <span>-</span>
                        <input type="tel" name="tel3" value="" placeholder="5678" class="tel">
                        @error('tel')
                        <p>{{$errors->first('tel')}}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="inner__items">
                <div class="inner__item-title">
                    住所<span>※</span>
                </div>
                <div class="inner__item-text">
                    <div class="address-group">
                        <input type="text" name="address" value="" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" class="address">
                        @error('address')
                        <p>{{$errors->first('address')}}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="inner__items">
                <div class="inner__item-title">
                    建物名
                </div>
                <div class="inner__item-text">
                    <div class="building-group">
                        <input type="text" name="building" value="" placeholder="例:千駄ヶ谷マンション101" class="building-name">
                    </div>
                </div>
            </div>

            <div class="inner__items">
                <div class="inner__item-title">
                    お問い合わせの種類<span>※</span>
                </div>
                <div class="inner__item-select">
                    <div class="categories-group">
                        <select name="categories" id="" class="categories">
                            <option value="" disabled selected style="display:none;">選択してください</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                            @endforeach
                        </select>
                        @error('categories')
                        <p>{{$errors->first('categories')}}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="inner__items">
                <div class="inner__item-title">
                    お問い合わせ内容<span>※</span>
                </div>
                <div class="inner__item-textarea">
                    <div class="opinion-group">
                        <textarea name="detail" value="" placeholder="お問い合わせ内容をご記載ください" id="" cols="30" rows="5" class="opinion"></textarea>
                        @error('detail')
                        <p>{{$errors->first('detail')}}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="button">
                <button class="confirm-button" type="submit">確認画面</button>
            </div>
        </form>
    </div>

@endsection