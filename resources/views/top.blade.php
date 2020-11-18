@extends('shared.header')

@section('body')

  <section class="form-section">
    <!-- @if($error_messages !== [])
      <div class="error red">
        @foreach($error_messages as $error_message)
          <p><{{ 'error_message' }}</p>
        @endforeach
      </div>
    @endif -->
    
    <form action="{{ 'http://test/transactions/validation.php' }}" method='post'>
      
      <label for="subject"><span class="red">*</span>件名</label>
      <select class="form-item" name="subject">
        <option value="ご意見" <?php if($subject === 'ご意見') echo 'selected' ?>>ご意見</option>
        <option value="ご感想" <?php if($subject === 'ご感想') echo 'selected' ?>>ご感想</option>
        <option value="その他" <?php if($subject === 'その他') echo 'selected' ?>>その他</option>
      </select>
      
      <label for="name"><span class="red">*</span>名前</label>
      <input type="text" class="form-item" name="name" placeholder="yamada taro" value="{{ 'name' }}">
      
      <label for="email"><span class="red">*</span>メールアドレス</label>
      <input type="email" class="form-item" name="email" placeholder="test@example.com" value="{{ 'email' }}">
      
      <label for="phoneNumber"><span class="red">*</span>電話番号</label>
      <input type="number" class="form-item" name="phoneNumber" placeholder="09012341234" min="0" step="1" value="{{ '01234' }}">

      <label for="message"><span class="red">*</span>お問い合わせ内容</label>
      <textarea class="form-item" name="message"rows="5">{{ 'message' }}</textarea>

      <input type="hidden" name="token" value="{{ 'token' }}">
      <button type="submit" class="btn submit form-item">送信</button>
    </form>
  </section>

@endsection