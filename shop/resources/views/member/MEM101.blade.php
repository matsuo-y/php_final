@extends('layouts.app')

@section('content')
    <div align="left" class="caption">会員情報を入力してください。 
      <br>
      <br>
			<!-- Display Validation Errors -->
			@include('common.errors')
      <br>●会員情報 
      <br>
      <br>
      <form action="{{action('OnlineMemberController@confirm')}}" method="post">
        {{ csrf_field() }}
        <table class="table-tate">
          <tr>
            <th>氏名</th>
            <td>
            <input type="text" name="name" value="{{old('name')}}">
            </td>
          </tr>
          <tr>
            <th>パスワード</th>
            <td>
            <input type="password" name="password">
            </td>
          </tr>
          <tr>
            <th>パスワード(確認用)</th>
            <td>
            <input type="password" name="password2">
            </td>
          </tr>
          <tr>
            <th>年齢</th>
            <td>
            <input type="number" name="age" min="0" value="{{old('age')}}">
            </td>
          </tr>
          <tr>
            <th>性別(選択してください)</th>
            <td>
            <select name="sex" value="{{old('sex')}}">
              <option value=""></option>
              <option value="M">男性</option>
              <option value="F">女性</option>
            </select>
          </tr>
          <tr>
            <th>郵便番号</th>
            <td>
            <input type="text" name="zip" value="{{old('zip')}}">
            </td>
          </tr>
          <tr>
            <th>住所</th>
            <td>
            <input type="textarea" name="address" cols="23" rows="5" value="{{old('address')}}"/>
            </td>
          </tr>
          <tr>
            <th>電話番号</th>
            <td>
            <input type="tel" name="tel" value="{{old('tel')}}">
            </td>
          </tr>
        </table>
        <br>
        <br>
        <button type="submit" name="confirm">確認</button>
        <button type="button" onClick="location.href='{{ url('/') }}'">戻る</button>
        <button type="reset">クリア</button>
      </form>
    </div>
@endsection