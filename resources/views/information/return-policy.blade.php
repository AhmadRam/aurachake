@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="col-md-12">
    <ul class="breadcrumb">
      <li><a href="{{ url(app()->getLocale(),'') }}">{{ __('Homepage')}}</a></li>
      <li class="active">{{ __('Return Policy')}}</li>
    </ul>
  </div>
</div>

<div class="container text-justify mb-30">
  <div class="col-md-12">


    <h2 class="urunDetayBaslik">{{ __('Return Policy')}}</h2>
    <div class='urunDetayAciklama'>
      <p>GENEL:</p>
      <p>1.Kullanmakta olduğunuz web sitesi &uuml;zerinden elektronik ortamda sipariş verdiğiniz takdirde, size sunulan &ouml;n bilgilendirme formunu ve mesafeli satış s&ouml;zleşmesini kabul etmiş sayılırsınız.</p>
      <p>2.Alıcılar, satın aldıkları &uuml;r&uuml;n&uuml;n satış ve teslimi ile ilgili olarak 6502 sayılı T&uuml;keticinin Korunması Hakkında Kanun ve Mesafeli S&ouml;zleşmeler Y&ouml;netmeliği (RG:27.11.2014/29188) h&uuml;k&uuml;mleri ile y&uuml;r&uuml;rl&uuml;kteki diğer yasalara tabidir.&nbsp;</p>
      <p>3.&Uuml;r&uuml;n sevkiyat masrafı olan kargo &uuml;cretleri alıcılar tarafından &ouml;denecektir.</p>
      <p>4.Satın alınan her bir &uuml;r&uuml;n, 30 g&uuml;nl&uuml;k yasal s&uuml;reyi aşmamak kaydı ile &nbsp;alıcının g&ouml;sterdiği adresteki kişi ve/veya kuruluşa teslim edilir. Bu s&uuml;re i&ccedil;inde &uuml;r&uuml;n teslim edilmez ise, &nbsp;Alıcılar s&ouml;zleşmeyi sona erdirebilir.&nbsp;</p>
      <p>5.Satın alınan &uuml;r&uuml;n, eksiksiz ve siparişte belirtilen niteliklere uygun ve varsa garanti belgesi, kullanım klavuzu gibi belgelerle teslim edilmek zorundadır.&nbsp;</p>
      <p>6.Satın alınan &uuml;r&uuml;n&uuml;n satılmasının imkansızlaşması durumunda, satıcı bu durumu &ouml;ğrendiğinden itibaren 3 g&uuml;n i&ccedil;inde yazılı olarak alıcıya bu durumu bildirmek zorundadır. 14 g&uuml;n i&ccedil;inde de toplam bedel Alıcı&rsquo;ya iade edilmek zorundadır.&nbsp;</p>
      <p>SATIN ALINAN &Uuml;R&Uuml;N BEDELİ &Ouml;DENMEZ İSE:&nbsp;</p>
      <p>7.Alıcı, satın aldığı &uuml;r&uuml;n bedelini &ouml;demez veya banka kayıtlarında iptal ederse, Satıcının &uuml;r&uuml;n&uuml; teslim y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml; sona erer.</p>
      <p>KREDİ KARTININ YETKİSİZ KULLANIMI İLE YAPILAN ALIŞVERİŞLER:&nbsp;</p>
      <p>8.&Uuml;r&uuml;n teslim edildikten sonra, alıcının &ouml;deme yaptığı kredi kartının yetkisiz kişiler tarafından haksız olarak kullanıldığı tespit edilirse ve satılan &uuml;r&uuml;n bedeli ilgili banka veya finans kuruluşu tarafından Satıcı&#39;ya &ouml;denmez ise, Alıcı, s&ouml;zleşme konusu &uuml;r&uuml;n&uuml; 3 g&uuml;n i&ccedil;erisinde nakliye gideri SATICI&rsquo;ya ait olacak şekilde SATICI&rsquo;ya iade etmek zorundadır.&nbsp;</p>
      <p>&Ouml;NG&Ouml;R&Uuml;LEMEYEN SEBEPLERLE &Uuml;R&Uuml;N S&Uuml;RESİNDE TESLİM EDİLEMEZ İSE:&nbsp;</p>
      <p>9.Satıcı&rsquo;nın &ouml;ng&ouml;remeyeceği m&uuml;cbir sebepler oluşursa ve &uuml;r&uuml;n s&uuml;resinde teslim edilemez ise, durum Alıcı&rsquo;ya bildirilir. Alıcı, siparişin iptalini, &uuml;r&uuml;n&uuml;n benzeri ile değiştirilmesini veya engel ortadan kalkana dek teslimatın ertelenmesini talep edebilir. Alıcı siparişi iptal ederse; &ouml;demeyi nakit ile yapmış ise iptalinden itibaren 14 g&uuml;n i&ccedil;inde kendisine nakden bu &uuml;cret &ouml;denir. Alıcı, &ouml;demeyi kredi kartı ile yapmış ise ve iptal ederse, bu iptalden itibaren yine 14 g&uuml;n i&ccedil;inde &uuml;r&uuml;n bedeli bankaya iade edilir, ancak bankanın alıcının hesabına 2-3 hafta i&ccedil;erisinde aktarması olasıdır.&nbsp;</p>
      <p>ALICININ &Uuml;R&Uuml;N&Uuml; KONTROL ETME Y&Uuml;K&Uuml;ML&Uuml;L&Uuml;Ğ&Uuml;:&nbsp;</p>
      <p>10.Alıcı, s&ouml;zleşme konusu mal/hizmeti teslim almadan &ouml;nce muayene edecek; ezik, kırık, ambalajı yırtılmış vb. hasarlı ve ayıplı mal/hizmeti kargo şirketinden teslim almayacaktır. Teslim alınan mal/hizmetin hasarsız ve sağlam olduğu kabul edilecektir. ALICI , Teslimden sonra mal/hizmeti &ouml;zenle korunmak zorundadır. Cayma hakkı kullanılacaksa mal/hizmet kullanılmamalıdır. &Uuml;r&uuml;nle birlikte Fatura da iade edilmelidir.</p>
      <p>CAYMA HAKKI:</p>
      <p>11.ALICI; satın aldığı &uuml;r&uuml;n&uuml;n kendisine veya g&ouml;sterdiği adresteki kişi/kuruluşa teslim tarihinden itibaren 14 (on d&ouml;rt) g&uuml;n i&ccedil;erisinde, SATICI&rsquo;ya aşağıdaki iletişim bilgileri &uuml;zerinden bildirmek şartıyla hi&ccedil;bir hukuki ve cezai sorumluluk &uuml;stlenmeksizin ve hi&ccedil;bir gerek&ccedil;e g&ouml;stermeksizin malı reddederek s&ouml;zleşmeden cayma hakkını kullanabilir.</p>
      <p>12.SATICININ CAYMA HAKKI BİLDİRİMİ YAPILACAK İLETİŞİM BİLGİLERİ:</p>
      <p>ŞİRKET&nbsp;</p>
      <p>&Uuml;nvanı:&nbsp;MCA Enerji Dan. İnş. TAAH. DIŞ. TİC. GIDA TAR. VE HAYV. LTD. ŞTİ.</p>
      <p>Adres:&nbsp;Bebek Mah. Dayıbey Sk. 21 / 3 Beşiktaş İstanbul</p>
      <p>Telefon:&nbsp;0850 305 09 15</p>
      <p>Faks:&nbsp;0850 305 09 15</p>
      <p>Eposta: info@aurachake.com.tr</p>
      <p>CAYMA HAKKININ S&Uuml;RESİ:</p>
      <p>13.Alıcı, satın aldığı eğer bir hizmet &nbsp;ise, bu 14 g&uuml;nl&uuml;k s&uuml;re s&ouml;zleşmenin imzalandığı tarihten itibaren başlar. Cayma hakkı s&uuml;resi sona ermeden &ouml;nce, t&uuml;keticinin onayı ile hizmetin ifasına başlanan hizmet s&ouml;zleşmelerinde cayma hakkı kullanılamaz.&nbsp;</p>
      <p>14.Cayma hakkının kullanımından kaynaklanan masraflar SATICI&rsquo; ya aittir.</p>
      <p>15.Cayma hakkının kullanılması i&ccedil;in 14 (ond&ouml;rt) g&uuml;nl&uuml;k s&uuml;re i&ccedil;inde SATICI&#39; ya iadeli taahh&uuml;tl&uuml; posta, faks veya eposta ile yazılı bildirimde bulunulması ve &uuml;r&uuml;n&uuml;n işbu s&ouml;zleşmede d&uuml;zenlenen &quot;Cayma Hakkı Kullanılamayacak &Uuml;r&uuml;nler&quot; h&uuml;k&uuml;mleri &ccedil;er&ccedil;evesinde kullanılmamış olması şarttır.&nbsp;</p>
      <p>CAYMA HAKKININ KULLANIMI:&nbsp;</p>
      <p>16.3. kişiye veya ALICI&rsquo; ya teslim edilen &uuml;r&uuml;n&uuml;n faturası, (İade edilmek istenen &uuml;r&uuml;n&uuml;n faturası kurumsal ise, iade ederken kurumun d&uuml;zenlemiş olduğu iade faturası ile birlikte g&ouml;nderilmesi gerekmektedir. Faturası kurumlar adına d&uuml;zenlenen sipariş iadeleri İADE FATURASI kesilmediği takdirde tamamlanamayacaktır.)</p>
      <p>17.İade formu, İade edilecek &uuml;r&uuml;nlerin kutusu, ambalajı, varsa standart aksesuarları ile birlikte eksiksiz ve hasarsız olarak teslim edilmesi gerekmektedir.</p>
      <p>İADE KOŞULLARI:</p>
      <p>18.SATICI, cayma bildiriminin kendisine ulaşmasından itibaren en ge&ccedil; 10 g&uuml;nl&uuml;k s&uuml;re i&ccedil;erisinde toplam bedeli ve ALICI&rsquo;yı bor&ccedil; altına sokan belgeleri ALICI&rsquo; ya iade etmek ve 20 g&uuml;nl&uuml;k s&uuml;re i&ccedil;erisinde malı iade almakla y&uuml;k&uuml;ml&uuml;d&uuml;r.</p>
      <p>19.ALICI&rsquo; nın kusurundan kaynaklanan bir nedenle malın değerinde bir azalma olursa veya iade imk&acirc;nsızlaşırsa ALICI kusuru oranında SATICI&rsquo; nın zararlarını tazmin etmekle y&uuml;k&uuml;ml&uuml;d&uuml;r. Ancak cayma hakkı s&uuml;resi i&ccedil;inde malın veya &uuml;r&uuml;n&uuml;n usul&uuml;ne uygun kullanılması sebebiyle meydana gelen değişiklik ve bozulmalardan ALICI sorumlu değildir.&nbsp;</p>
      <p>20.Cayma hakkının kullanılması nedeniyle SATICI tarafından d&uuml;zenlenen kampanya limit tutarının altına d&uuml;ş&uuml;lmesi halinde kampanya kapsamında faydalanılan indirim miktarı iptal edilir.</p>
      <p>CAYMA HAKKI KULLANILAMAYACAK &Uuml;R&Uuml;NLER:&nbsp;</p>
      <p>21.ALICI&rsquo;nın isteği veya a&ccedil;ık&ccedil;a kişisel ihtiya&ccedil;ları doğrultusunda hazırlanan ve geri g&ouml;nderilmeye m&uuml;sait olmayan, i&ccedil; giyim alt par&ccedil;aları, mayo ve bikini altları, makyaj malzemeleri, tek kullanımlık &uuml;r&uuml;nler, &ccedil;abuk bozulma tehlikesi olan veya son kullanma tarihi ge&ccedil;me ihtimali olan mallar, ALICI&rsquo;ya teslim edilmesinin ardından ALICI tarafından ambalajı a&ccedil;ıldığı takdirde iade edilmesi sağlık ve hijyen a&ccedil;ısından uygun olmayan &uuml;r&uuml;nler, teslim edildikten sonra başka &uuml;r&uuml;nlerle karışan ve doğası gereği ayrıştırılması m&uuml;mk&uuml;n olmayan &uuml;r&uuml;nler, Abonelik s&ouml;zleşmesi kapsamında sağlananlar dışında, gazete ve dergi gibi s&uuml;reli yayınlara ilişkin mallar, Elektronik ortamda anında ifa edilen hizmetler veya t&uuml;keticiye anında teslim edilen gayrimaddi mallar, ile ses veya g&ouml;r&uuml;nt&uuml; kayıtlarının, kitap, dijital i&ccedil;erik, yazılım programlarının, veri kaydedebilme ve veri depolama cihazlarının, bilgisayar sarf malzemelerinin, ambalajının ALICI tarafından a&ccedil;ılmış olması halinde iadesi Y&ouml;netmelik gereği m&uuml;mk&uuml;n değildir. Ayrıca Cayma hakkı s&uuml;resi sona ermeden &ouml;nce, t&uuml;keticinin onayı ile ifasına başlanan hizmetlere ilişkin cayma hakkının kullanılması da Y&ouml;netmelik gereği m&uuml;mk&uuml;n değildir.</p>
      <p>22.Kozmetik ve kişisel bakım &uuml;r&uuml;nleri, i&ccedil; giyim &uuml;r&uuml;nleri, mayo, bikini, kitap, kopyalanabilir yazılım ve programlar, DVD, VCD, CD ve kasetler ile kırtasiye sarf malzemeleri (toner, kartuş, şerit vb.) iade edilebilmesi i&ccedil;in ambalajlarının a&ccedil;ılmamış, denenmemiş, bozulmamış ve kullanılmamış olmaları gerekir.&nbsp;</p>
      <p>TEMERR&Uuml;T HALİ VE HUKUKİ SONU&Ccedil;LARI</p>
      <p>23.ALICI, &ouml;deme işlemlerini &nbsp;kredi kartı ile yaptığı durumda temerr&uuml;de d&uuml;şt&uuml;ğ&uuml; takdirde, kart sahibi banka ile arasındaki kredi kartı s&ouml;zleşmesi &ccedil;er&ccedil;evesinde faiz &ouml;deyeceğini ve bankaya karşı sorumlu olacağını kabul, beyan ve taahh&uuml;t eder. Bu durumda ilgili banka hukuki yollara başvurabilir; doğacak masrafları ve vek&acirc;let &uuml;cretini ALICI&rsquo;dan talep edebilir ve her koşulda ALICI&rsquo;nın borcundan dolayı temerr&uuml;de d&uuml;şmesi halinde, ALICI, borcun gecikmeli ifasından dolayı SATICI&rsquo;nın uğradığı zarar ve ziyanını &ouml;deyeceğini kabul eder.&nbsp;</p>
      <p>&Ouml;DEME VE TESLİMAT</p>
      <p>24.Sitemiz &uuml;zerinden kredi kartlarınız ile, Her t&uuml;rl&uuml; kredi kartınıza online tek &ouml;deme ya da online taksit imk&acirc;nlarından yararlanabilirsiniz. Online &ouml;demelerinizde siparişiniz sonunda kredi kartınızdan tutar &ccedil;ekim işlemi ger&ccedil;ekleşecektir.</p>
    </div>


  </div>

</div>

@endsection