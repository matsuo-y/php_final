@extends('layouts.app')

@section('content')
    <div class="top-div">
      <div id="title-link " align="left">オンラインショッピングサイト</div>
      <div align="right">
        <span class="date">2019/12/30</span>
        <br>
        <span class="pnk">「XXXX」さん</span>
      </div>
    </div>
    <div align="left" class="caption">会員情報を入力してください。 
      <br>
      <br>
      <span>エラーをここに表示</span>
      <br>●会員情報 
      <br>
      <br>
      <form action="/preRegistac">
        <table class="table-tate">
          <tr>
            <th>氏名</th>
            <td>
            <html:text property="name" />
            </td>
          </tr>
          <tr>
            <th>パスワード</th>
            <td>
            <html:password property="password" />
            </td>
          </tr>
          <tr>
            <th>パスワード(確認用)</th>
            <td>
            <html:password property="password2" />
            </td>
          </tr>
          <tr>
            <th>年齢</th>
            <td>
            <input type="number" name="age">
            </td>
          </tr>
          <tr>
            <th>性別(選択してください)</th>
            <td>
            <html:select property="sex" value="">
              <html:option value=""></html:option>
              <html:option value="男">男</html:option>
              <html:option value="女">女</html:option>
            </html:select>
          </tr>
          <tr>
            <th>郵便番号</th>
            <td>
            <html:text property="zip" />
            </td>
          </tr>
          <tr>
            <th>住所</th>
            <td>
            <html:textarea property="address" cols="23" rows="5" />
            </td>
          </tr>
          <tr>
            <th>電話番号</th>
            <td>
            <html:text property="tel" />
            </td>
          </tr>
        </table>
        <br>
        <br>
        <button type=button onclick="preRegistChoice">確認</button>
        <button type=button onclick="preRegistChoice">戻る</button>
        <button type=button onclick="reset">クリア</button>
      </form>
    </div>
@endsection