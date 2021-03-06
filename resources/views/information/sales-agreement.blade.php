@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="col-md-12">
    <ul class="breadcrumb">
      <li><a href="{{ url(app()->getLocale(),'') }}">{{ __('Homepage')}}</a></li>
      <li class="active">{{ __('Sales Agreement')}}</li>
    </ul>
  </div>
</div>

<div class="container text-justify mb-30">
  <div class="col-md-12">


    <h2 class="urunDetayBaslik">{{ __('Sales Agreement')}}</h2>
    <div class='urunDetayAciklama'>
      <p>1.TARAFLAR</p>
      <p>İşbu S&ouml;zleşme aşağıdaki taraflar arasında aşağıda belirtilen h&uuml;k&uuml;m ve şartlar &ccedil;er&ccedil;evesinde imzalanmıştır.&nbsp;</p>
      <p>A.&lsquo;ALICI&rsquo; ; (s&ouml;zleşmede bundan sonra &quot;ALICI&quot; olarak anılacaktır)</p>
      <p>B.&lsquo;SATICI&rsquo; ; (s&ouml;zleşmede bundan sonra &quot;SATICI&quot; olarak anılacaktır)</p>
      <p>AD- SOYAD:</p>
      <p>ADRES:&nbsp;</p>
      <p>İş bu s&ouml;zleşmeyi kabul etmekle ALICI, s&ouml;zleşme konusu siparişi onayladığı takdirde sipariş konusu bedeli ve varsa kargo &uuml;creti, vergi gibi belirtilen ek &uuml;cretleri &ouml;deme y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml; altına gireceğini ve bu konuda bilgilendirildiğini peşinen kabul eder.</p>
      <p>2.TANIMLAR</p>
      <p>İşbu s&ouml;zleşmenin uygulanmasında ve yorumlanmasında aşağıda yazılı terimler karşılarındaki yazılı a&ccedil;ıklamaları ifade edeceklerdir.</p>
      <p>BAKAN: G&uuml;mr&uuml;k ve Ticaret Bakanı&rsquo;nı,</p>
      <p>BAKANLIK: G&uuml;mr&uuml;k ve Ticaret &nbsp;Bakanlığı&rsquo;nı,</p>
      <p>KANUN: 6502 sayılı T&uuml;keticinin Korunması Hakkında Kanun&rsquo;u,</p>
      <p>Y&Ouml;NETMELİK: Mesafeli S&ouml;zleşmeler Y&ouml;netmeliği&rsquo;ni (RG:27.11.2014/29188)</p>
      <p>HİZMET: Bir &uuml;cret veya menfaat karşılığında yapılan ya da yapılması taahh&uuml;t edilen mal sağlama dışındaki her t&uuml;rl&uuml; t&uuml;ketici işleminin konusunu ,</p>
      <p>SATICI: Ticari veya mesleki faaliyetleri kapsamında t&uuml;keticiye mal sunan veya mal sunan adına veya hesabına hareket eden şirketi,</p>
      <p>ALICI: Bir mal veya hizmeti ticari veya mesleki olmayan ama&ccedil;larla edinen, kullanan veya yararlanan ger&ccedil;ek ya da t&uuml;zel kişiyi,</p>
      <p>SİTE: SATICI&rsquo;ya ait internet sitesini,</p>
      <p>SİPARİŞ VEREN: Bir mal veya hizmeti SATICI&rsquo;ya ait internet sitesi &uuml;zerinden talep eden ger&ccedil;ek ya da t&uuml;zel kişiyi,</p>
      <p>TARAFLAR: SATICI ve ALICI&rsquo;yı,</p>
      <p>S&Ouml;ZLEŞME: SATICI ve ALICI arasında akdedilen işbu s&ouml;zleşmeyi,</p>
      <p>MAL: Alışverişe konu olan taşınır eşyayı ve elektronik ortamda kullanılmak &uuml;zere hazırlanan yazılım, ses, g&ouml;r&uuml;nt&uuml; ve benzeri gayri maddi malları ifade eder.</p>
      <p>3.KONU</p>
      <p>İşbu S&ouml;zleşme, ALICI&rsquo;nın, SATICI&rsquo;ya ait internet sitesi &uuml;zerinden elektronik ortamda siparişini verdiği aşağıda nitelikleri ve satış fiyatı belirtilen &uuml;r&uuml;n&uuml;n satışı ve teslimi ile ilgili olarak 6502 sayılı T&uuml;keticinin Korunması Hakkında Kanun ve Mesafeli S&ouml;zleşmelere Dair Y&ouml;netmelik h&uuml;k&uuml;mleri gereğince tarafların hak ve y&uuml;k&uuml;ml&uuml;l&uuml;klerini d&uuml;zenler.</p>
      <p>Listelenen ve sitede ilan edilen fiyatlar satış fiyatıdır. İlan edilen fiyatlar ve vaatler g&uuml;ncelleme yapılana ve değiştirilene kadar ge&ccedil;erlidir. S&uuml;reli olarak ilan edilen fiyatlar ise belirtilen s&uuml;re sonuna kadar ge&ccedil;erlidir.</p>
      <p>4. SATICI BİLGİLERİ</p>
      <p>&Uuml;nvanı:&nbsp;MCA Enerji Dan. İnş. TAAH. DIŞ. TİC. GIDA TAR. VE HAYV. LTD. ŞTİ.</p>
      <p>Adres:&nbsp;Bebek Mah. Dayıbey Sk. 21 / 3 Beşiktaş İstanbul</p>
      <p>Telefon:&nbsp;0850 305 09 15</p>
      <p>Faks:&nbsp;0850 305 09 15</p>
      <p>Eposta: info@aurachake.com.tr</p>
      <p>5. ALICI BİLGİLERİ</p>
      <p>Teslim edilecek kişi</p>
      <p>Teslimat Adresi</p>
      <p>Telefon</p>
      <p>Faks</p>
      <p>Eposta/kullanıcı adı</p>
      <p>6. SİPARİŞ VEREN KİŞİ BİLGİLERİ</p>
      <p>Ad/Soyad/Unvan</p>
      <p>Adres</p>
      <p>Telefon</p>
      <p>Faks</p>
      <p>Eposta/kullanıcı adı</p>
      <p>7. S&Ouml;ZLEŞME KONUSU &Uuml;R&Uuml;N/&Uuml;R&Uuml;NLER BİLGİLERİ</p>
      <p>1. Malın /&Uuml;r&uuml;n/&Uuml;r&uuml;nlerin/ Hizmetin temel &ouml;zelliklerini (t&uuml;r&uuml;, miktarı, marka/modeli, rengi, adedi) SATICI&rsquo;ya ait internet sitesinde yayınlanmaktadır. Satıcı tarafından kampanya d&uuml;zenlenmiş ise ilgili &uuml;r&uuml;n&uuml;n temel &ouml;zelliklerini kampanya s&uuml;resince inceleyebilirsiniz. Kampanya tarihine kadar ge&ccedil;erlidir.</p>
      <p>7.2. Listelenen ve sitede ilan edilen fiyatlar satış fiyatıdır. İlan edilen fiyatlar ve vaatler g&uuml;ncelleme yapılana ve değiştirilene kadar ge&ccedil;erlidir. S&uuml;reli olarak ilan edilen fiyatlar ise belirtilen s&uuml;re sonuna kadar ge&ccedil;erlidir.</p>
      <p>7.3. S&ouml;zleşme konusu mal ya da hizmetin t&uuml;m vergiler d&acirc;hil satış fiyatı aşağıda g&ouml;sterilmiştir.</p>
      <p>&Uuml;r&uuml;n A&ccedil;ıklamasıAdetBirim FiyatıAra Toplam</p>
      <p>(KDV Dahil)</p>
      <p>Kargo Tutarı</p>
      <p>Toplam :</p>
      <p>&nbsp;</p>
      <p>&Ouml;deme Şekli ve Planı</p>
      <p>Teslimat Adresi</p>
      <p>Teslim Edilecek kişi</p>
      <p>Fatura Adresi</p>
      <p>Sipariş Tarihi</p>
      <p>Teslimat tarihi</p>
      <p>Teslim şekli</p>
      <p>7.4. &nbsp;&Uuml;r&uuml;n sevkiyat masrafı olan kargo &uuml;creti ALICI tarafından &ouml;denecektir.</p>
      <p>8. FATURA BİLGİLERİ</p>
      <p>Ad/Soyad/Unvan</p>
      <p>Adres</p>
      <p>Telefon</p>
      <p>Faks</p>
      <p>Eposta/kullanıcı adı</p>
      <p>Fatura teslim : Fatura sipariş teslimatı sırasında fatura adresine sipariş ile birlikte&nbsp;</p>
      <p>teslim edilecektir.</p>
      <p>9. GENEL H&Uuml;K&Uuml;MLER</p>
      <p>9.1. ALICI, SATICI&rsquo;ya ait internet sitesinde s&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n temel nitelikleri, satış fiyatı ve &ouml;deme şekli ile teslimata ilişkin &ouml;n bilgileri okuyup, bilgi sahibi olduğunu, elektronik ortamda gerekli teyidi verdiğini kabul, beyan ve taahh&uuml;t eder. ALICI&rsquo;nın; &Ouml;n Bilgilendirmeyi elektronik ortamda teyit etmesi, mesafeli satış s&ouml;zleşmesinin kurulmasından evvel, SATICI tarafından ALICI&#39; ya verilmesi gereken adresi, siparişi verilen &uuml;r&uuml;nlere ait temel &ouml;zellikleri, &uuml;r&uuml;nlerin vergiler d&acirc;hil fiyatını, &ouml;deme ve teslimat bilgilerini de doğru ve eksiksiz olarak edindiğini kabul, beyan ve taahh&uuml;t eder.</p>
      <p>9.2. S&ouml;zleşme konusu her bir &uuml;r&uuml;n, 30 g&uuml;nl&uuml;k yasal s&uuml;reyi aşmamak kaydı ile ALICI&#39; nın yerleşim yeri uzaklığına bağlı olarak internet sitesindeki &ouml;n bilgiler kısmında belirtilen s&uuml;re zarfında ALICI veya ALICI&rsquo;nın g&ouml;sterdiği adresteki kişi ve/veya kuruluşa teslim edilir. Bu s&uuml;re i&ccedil;inde &uuml;r&uuml;n&uuml;n ALICI&rsquo;ya teslim edilememesi durumunda, ALICI&rsquo;nın s&ouml;zleşmeyi feshetme hakkı saklıdır.&nbsp;</p>
      <p>9.3. SATICI, S&ouml;zleşme konusu &uuml;r&uuml;n&uuml; eksiksiz, siparişte belirtilen niteliklere uygun ve varsa garanti belgeleri, kullanım kılavuzları işin gereği olan bilgi ve belgeler ile teslim etmeyi, her t&uuml;rl&uuml; ayıptan ar&icirc; olarak yasal mevzuat gereklerine g&ouml;re sağlam, standartlara uygun bir şekilde işi doğruluk ve d&uuml;r&uuml;stl&uuml;k esasları d&acirc;hilinde ifa etmeyi, hizmet kalitesini koruyup y&uuml;kseltmeyi, işin ifası sırasında gerekli dikkat ve &ouml;zeni g&ouml;stermeyi, ihtiyat ve &ouml;ng&ouml;r&uuml; ile hareket etmeyi kabul, beyan ve taahh&uuml;t eder.</p>
      <p>9.4. SATICI, s&ouml;zleşmeden doğan ifa y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;n&uuml;n s&uuml;resi dolmadan ALICI&rsquo;yı bilgilendirmek ve a&ccedil;ık&ccedil;a onayını almak suretiyle eşit kalite ve fiyatta farklı bir &uuml;r&uuml;n tedarik edebilir.</p>
      <p>9.5. SATICI, sipariş konusu &uuml;r&uuml;n veya hizmetin yerine getirilmesinin imk&acirc;nsızlaşması halinde s&ouml;zleşme konusu y&uuml;k&uuml;ml&uuml;l&uuml;klerini yerine getiremezse, bu durumu, &ouml;ğrendiği tarihten itibaren 3 g&uuml;n i&ccedil;inde yazılı olarak t&uuml;keticiye bildireceğini, 14 g&uuml;nl&uuml;k s&uuml;re i&ccedil;inde toplam bedeli ALICI&rsquo;ya iade edeceğini kabul, beyan ve taahh&uuml;t eder.&nbsp;</p>
      <p>9.6. ALICI, S&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n teslimatı i&ccedil;in işbu S&ouml;zleşme&rsquo;yi elektronik ortamda teyit edeceğini, herhangi bir nedenle s&ouml;zleşme konusu &uuml;r&uuml;n bedelinin &ouml;denmemesi ve/veya banka kayıtlarında iptal edilmesi halinde, SATICI&rsquo;nın s&ouml;zleşme konusu &uuml;r&uuml;n&uuml; teslim y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;n&uuml;n sona ereceğini kabul, beyan ve taahh&uuml;t eder.</p>
      <p>9.7. ALICI, S&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n ALICI veya ALICI&rsquo;nın g&ouml;sterdiği adresteki kişi ve/veya kuruluşa tesliminden sonra ALICI&#39;ya ait kredi kartının yetkisiz kişilerce haksız kullanılması sonucunda s&ouml;zleşme konusu &uuml;r&uuml;n bedelinin ilgili banka veya finans kuruluşu tarafından SATICI&#39;ya &ouml;denmemesi halinde, ALICI S&ouml;zleşme konusu &uuml;r&uuml;n&uuml; 3 g&uuml;n i&ccedil;erisinde nakliye gideri SATICI&rsquo;ya ait olacak şekilde SATICI&rsquo;ya iade edeceğini kabul, beyan ve taahh&uuml;t eder.</p>
      <p>9.8. SATICI, tarafların iradesi dışında gelişen, &ouml;nceden &ouml;ng&ouml;r&uuml;lemeyen ve tarafların bor&ccedil;larını yerine getirmesini engelleyici ve/veya geciktirici hallerin oluşması gibi m&uuml;cbir sebepler halleri nedeni ile s&ouml;zleşme konusu &uuml;r&uuml;n&uuml; s&uuml;resi i&ccedil;inde teslim edemez ise, durumu ALICI&#39;ya bildireceğini kabul, beyan ve taahh&uuml;t eder. ALICI da siparişin iptal edilmesini, s&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n varsa emsali ile değiştirilmesini ve/veya teslimat s&uuml;resinin engelleyici durumun ortadan kalkmasına kadar ertelenmesini SATICI&rsquo;dan talep etme hakkını haizdir. ALICI tarafından siparişin iptal edilmesi halinde ALICI&rsquo;nın nakit ile yaptığı &ouml;demelerde, &uuml;r&uuml;n tutarı 14 g&uuml;n i&ccedil;inde kendisine nakden ve defaten &ouml;denir. ALICI&rsquo;nın kredi kartı ile yaptığı &ouml;demelerde ise, &uuml;r&uuml;n tutarı, siparişin ALICI tarafından iptal edilmesinden sonra 14 g&uuml;n i&ccedil;erisinde ilgili bankaya iade edilir. ALICI, SATICI tarafından kredi kartına iade edilen tutarın banka tarafından ALICI hesabına yansıtılmasına ilişkin ortalama s&uuml;recin 2 ile 3 haftayı bulabileceğini, bu tutarın bankaya iadesinden sonra ALICI&rsquo;nın hesaplarına yansıması halinin tamamen banka işlem s&uuml;reci ile ilgili olduğundan, ALICI, olası gecikmeler i&ccedil;in SATICI&rsquo;yı sorumlu tutamayacağını kabul, beyan ve taahh&uuml;t eder.</p>
      <p>9.9. SATICININ, ALICI tarafından siteye kayıt formunda belirtilen veya daha sonra kendisi tarafından g&uuml;ncellenen adresi, e-posta adresi, sabit ve mobil telefon hatları ve diğer iletişim bilgileri &uuml;zerinden mektup, e-posta, SMS, telefon g&ouml;r&uuml;şmesi ve diğer yollarla iletişim, pazarlama, bildirim ve diğer ama&ccedil;larla ALICI&rsquo;ya ulaşma hakkı bulunmaktadır. ALICI, işbu s&ouml;zleşmeyi kabul etmekle SATICI&rsquo;nın kendisine y&ouml;nelik yukarıda belirtilen iletişim faaliyetlerinde bulunabileceğini kabul ve beyan etmektedir.</p>
      <p>9.10. ALICI, s&ouml;zleşme konusu mal/hizmeti teslim almadan &ouml;nce muayene edecek; ezik, kırık, ambalajı yırtılmış vb. hasarlı ve ayıplı mal/hizmeti kargo şirketinden teslim almayacaktır. Teslim alınan mal/hizmetin hasarsız ve sağlam olduğu kabul edilecektir. Teslimden sonra mal/hizmetin &ouml;zenle korunması borcu, ALICI&rsquo;ya aittir. Cayma hakkı kullanılacaksa mal/hizmet kullanılmamalıdır. Fatura iade edilmelidir.</p>
      <p>9.11. ALICI ile sipariş esnasında kullanılan kredi kartı hamilinin aynı kişi olmaması veya &uuml;r&uuml;n&uuml;n ALICI&rsquo;ya tesliminden evvel, siparişte kullanılan kredi kartına ilişkin g&uuml;venlik a&ccedil;ığı tespit edilmesi halinde, SATICI, kredi kartı hamiline ilişkin kimlik ve iletişim bilgilerini, siparişte kullanılan kredi kartının bir &ouml;nceki aya ait ekstresini yahut kart hamilinin bankasından kredi kartının kendisine ait olduğuna ilişkin yazıyı ibraz etmesini ALICI&rsquo;dan talep edebilir. ALICI&rsquo;nın talebe konu bilgi/belgeleri temin etmesine kadar ge&ccedil;ecek s&uuml;rede sipariş dondurulacak olup, mezkur taleplerin 24 saat i&ccedil;erisinde karşılanmaması halinde ise SATICI, siparişi iptal etme hakkını haizdir.</p>
      <p>9.12. ALICI, SATICI&rsquo;ya ait internet sitesine &uuml;ye olurken verdiği kişisel ve diğer sair bilgilerin ger&ccedil;eğe uygun olduğunu, SATICI&rsquo;nın bu bilgilerin ger&ccedil;eğe aykırılığı nedeniyle uğrayacağı t&uuml;m zararları, SATICI&rsquo;nın ilk bildirimi &uuml;zerine derhal, nakden ve defaten tazmin edeceğini beyan ve taahh&uuml;t eder.</p>
      <p>9.13. ALICI, SATICI&rsquo;ya ait internet sitesini kullanırken yasal mevzuat h&uuml;k&uuml;mlerine riayet etmeyi ve bunları ihlal etmemeyi baştan kabul ve taahh&uuml;t eder. Aksi takdirde, doğacak t&uuml;m hukuki ve cezai y&uuml;k&uuml;ml&uuml;l&uuml;kler tamamen ve m&uuml;nhasıran ALICI&rsquo;yı bağlayacaktır.</p>
      <p>9.14. ALICI, SATICI&rsquo;ya ait internet sitesini hi&ccedil;bir şekilde kamu d&uuml;zenini bozucu, genel ahlaka aykırı, başkalarını rahatsız ve taciz edici şekilde, yasalara aykırı bir ama&ccedil; i&ccedil;in, başkalarının maddi ve manevi haklarına tecav&uuml;z edecek şekilde kullanamaz. Ayrıca, &uuml;ye başkalarının hizmetleri kullanmasını &ouml;nleyici veya zorlaştırıcı faaliyet (spam, virus, truva atı, vb.) işlemlerde bulunamaz.</p>
      <p>9.15. SATICI&rsquo;ya ait internet sitesinin &uuml;zerinden, SATICI&rsquo;nın kendi kontrol&uuml;nde olmayan ve/veya başkaca &uuml;&ccedil;&uuml;nc&uuml; kişilerin sahip olduğu ve/veya işlettiği başka web sitelerine ve/veya başka i&ccedil;eriklere link verilebilir. Bu linkler ALICI&rsquo;ya y&ouml;nlenme kolaylığı sağlamak amacıyla konmuş olup herhangi bir web sitesini veya o siteyi işleten kişiyi desteklememekte ve Link verilen web sitesinin i&ccedil;erdiği bilgilere y&ouml;nelik herhangi bir garanti niteliği taşımamaktadır.</p>
      <p>9.16. İşbu s&ouml;zleşme i&ccedil;erisinde sayılan maddelerden bir ya da birka&ccedil;ını ihlal eden &uuml;ye işbu ihlal nedeniyle cezai ve hukuki olarak şahsen sorumlu olup, SATICI&rsquo;yı bu ihlallerin hukuki ve cezai sonu&ccedil;larından ari tutacaktır. Ayrıca; işbu ihlal nedeniyle, olayın hukuk alanına intikal ettirilmesi halinde, SATICI&rsquo;nın &uuml;yeye karşı &uuml;yelik s&ouml;zleşmesine uyulmamasından dolayı tazminat talebinde bulunma hakkı saklıdır.</p>
      <p>10. CAYMA HAKKI</p>
      <p>10.1. ALICI; mesafeli s&ouml;zleşmenin mal satışına ilişkin olması durumunda, &uuml;r&uuml;n&uuml;n kendisine veya g&ouml;sterdiği adresteki kişi/kuruluşa teslim tarihinden itibaren 14 (on d&ouml;rt) g&uuml;n i&ccedil;erisinde, SATICI&rsquo;ya bildirmek şartıyla hi&ccedil;bir hukuki ve cezai sorumluluk &uuml;stlenmeksizin ve hi&ccedil;bir gerek&ccedil;e g&ouml;stermeksizin malı reddederek s&ouml;zleşmeden cayma hakkını kullanabilir. Hizmet sunumuna ilişkin mesafeli s&ouml;zleşmelerde ise, bu s&uuml;re s&ouml;zleşmenin imzalandığı tarihten itibaren başlar. Cayma hakkı s&uuml;resi sona ermeden &ouml;nce, t&uuml;keticinin onayı ile hizmetin ifasına başlanan hizmet s&ouml;zleşmelerinde cayma hakkı kullanılamaz. Cayma hakkının kullanımından kaynaklanan masraflar SATICI&rsquo; ya aittir. ALICI, iş bu s&ouml;zleşmeyi kabul etmekle, cayma hakkı konusunda bilgilendirildiğini peşinen kabul eder.</p>
      <p>10.2. Cayma hakkının kullanılması i&ccedil;in 14 (ond&ouml;rt) g&uuml;nl&uuml;k s&uuml;re i&ccedil;inde SATICI&#39; ya iadeli taahh&uuml;tl&uuml; posta, faks veya eposta ile yazılı bildirimde bulunulması ve &uuml;r&uuml;n&uuml;n işbu s&ouml;zleşmede d&uuml;zenlenen &quot;Cayma Hakkı Kullanılamayacak &Uuml;r&uuml;nler&quot; h&uuml;k&uuml;mleri &ccedil;er&ccedil;evesinde kullanılmamış olması şarttır. Bu hakkın kullanılması halinde,&nbsp;</p>
      <p>a) 3. kişiye veya ALICI&rsquo; ya teslim edilen &uuml;r&uuml;n&uuml;n faturası, (İade edilmek istenen &uuml;r&uuml;n&uuml;n faturası kurumsal ise, iade ederken kurumun d&uuml;zenlemiş olduğu iade faturası ile birlikte g&ouml;nderilmesi gerekmektedir. Faturası kurumlar adına d&uuml;zenlenen sipariş iadeleri İADE FATURASI kesilmediği takdirde tamamlanamayacaktır.)</p>
      <p>b) İade formu,</p>
      <p>c) İade edilecek &uuml;r&uuml;nlerin kutusu, ambalajı, varsa standart aksesuarları ile birlikte eksiksiz ve hasarsız olarak teslim edilmesi gerekmektedir.</p>
      <p>d) SATICI, cayma bildiriminin kendisine ulaşmasından itibaren en ge&ccedil; 10 g&uuml;nl&uuml;k s&uuml;re i&ccedil;erisinde toplam bedeli ve ALICI&rsquo;yı bor&ccedil; altına sokan belgeleri ALICI&rsquo; ya iade etmek ve 20 g&uuml;nl&uuml;k s&uuml;re i&ccedil;erisinde malı iade almakla y&uuml;k&uuml;ml&uuml;d&uuml;r.</p>
      <p>e) ALICI&rsquo; nın kusurundan kaynaklanan bir nedenle malın değerinde bir azalma olursa veya iade imk&acirc;nsızlaşırsa ALICI kusuru oranında SATICI&rsquo; nın zararlarını tazmin etmekle y&uuml;k&uuml;ml&uuml;d&uuml;r. Ancak cayma hakkı s&uuml;resi i&ccedil;inde malın veya &uuml;r&uuml;n&uuml;n usul&uuml;ne uygun kullanılması sebebiyle meydana gelen değişiklik ve bozulmalardan ALICI sorumlu değildir.&nbsp;</p>
      <p>f) Cayma hakkının kullanılması nedeniyle SATICI tarafından d&uuml;zenlenen kampanya limit tutarının altına d&uuml;ş&uuml;lmesi halinde kampanya kapsamında faydalanılan indirim miktarı iptal edilir.</p>
      <p>11. CAYMA HAKKI KULLANILAMAYACAK &Uuml;R&Uuml;NLER</p>
      <p>ALICI&rsquo;nın isteği veya a&ccedil;ık&ccedil;a kişisel ihtiya&ccedil;ları doğrultusunda hazırlanan ve geri g&ouml;nderilmeye m&uuml;sait olmayan, i&ccedil; giyim alt par&ccedil;aları, mayo ve bikini altları, makyaj malzemeleri, tek kullanımlık &uuml;r&uuml;nler, &ccedil;abuk bozulma tehlikesi olan veya son kullanma tarihi ge&ccedil;me ihtimali olan mallar, ALICI&rsquo;ya teslim edilmesinin ardından ALICI tarafından ambalajı a&ccedil;ıldığı takdirde iade edilmesi sağlık ve hijyen a&ccedil;ısından uygun olmayan &uuml;r&uuml;nler, teslim edildikten sonra başka &uuml;r&uuml;nlerle karışan ve doğası gereği ayrıştırılması m&uuml;mk&uuml;n olmayan &uuml;r&uuml;nler, Abonelik s&ouml;zleşmesi kapsamında sağlananlar dışında, gazete ve dergi gibi s&uuml;reli yayınlara ilişkin mallar, Elektronik ortamda anında ifa edilen hizmetler veya t&uuml;keticiye anında teslim edilen gayrimaddi mallar, ile ses veya g&ouml;r&uuml;nt&uuml; kayıtlarının, kitap, dijital i&ccedil;erik, yazılım programlarının, veri kaydedebilme ve veri depolama cihazlarının, &nbsp;bilgisayar sarf malzemelerinin, ambalajının ALICI tarafından a&ccedil;ılmış olması halinde iadesi Y&ouml;netmelik gereği m&uuml;mk&uuml;n değildir. Ayrıca Cayma hakkı s&uuml;resi sona ermeden &ouml;nce, t&uuml;keticinin onayı ile ifasına başlanan hizmetlere ilişkin cayma hakkının kullanılması da Y&ouml;netmelik gereği m&uuml;mk&uuml;n değildir.</p>
      <p>Kozmetik ve kişisel bakım &uuml;r&uuml;nleri, i&ccedil; giyim &uuml;r&uuml;nleri, mayo, bikini, kitap, kopyalanabilir yazılım ve programlar, DVD, VCD, CD ve kasetler ile kırtasiye sarf malzemeleri (toner, kartuş, şerit vb.) iade edilebilmesi i&ccedil;in ambalajlarının a&ccedil;ılmamış, denenmemiş, bozulmamış ve kullanılmamış olmaları gerekir.&nbsp;</p>
      <p>12. TEMERR&Uuml;T HALİ VE HUKUKİ SONU&Ccedil;LARI</p>
      <p>ALICI, &ouml;deme işlemlerini &nbsp;kredi kartı ile yaptığı durumda temerr&uuml;de d&uuml;şt&uuml;ğ&uuml; takdirde, kart sahibi banka ile arasındaki kredi kartı s&ouml;zleşmesi &ccedil;er&ccedil;evesinde faiz &ouml;deyeceğini ve bankaya karşı sorumlu olacağını kabul, beyan ve taahh&uuml;t eder. Bu durumda ilgili banka hukuki yollara başvurabilir; doğacak masrafları ve vek&acirc;let &uuml;cretini ALICI&rsquo;dan talep edebilir ve her koşulda ALICI&rsquo;nın borcundan dolayı temerr&uuml;de d&uuml;şmesi halinde, ALICI, borcun gecikmeli ifasından dolayı SATICI&rsquo;nın uğradığı zarar ve ziyanını &ouml;deyeceğini kabul, beyan ve taahh&uuml;t eder</p>
      <p>13. YETKİLİ MAHKEME</p>
      <p>İşbu s&ouml;zleşmeden doğan uyuşmazlıklarda şikayet ve itirazlar, aşağıdaki kanunda belirtilen parasal sınırlar d&acirc;hilinde t&uuml;keticinin yerleşim yerinin bulunduğu veya t&uuml;ketici işleminin yapıldığı yerdeki t&uuml;ketici sorunları hakem heyetine veya t&uuml;ketici mahkemesine yapılacaktır. Parasal sınıra ilişkin bilgiler aşağıdadır:</p>
      <p>01/01/2017 tarihinden itibaren ge&ccedil;erli olmak &uuml;zere, 2017 yılı i&ccedil;in t&uuml;ketici hakem heyetlerine yapılacak başvurularda değeri:</p>
      <p>a) 2.400 (iki bin d&ouml;rt y&uuml;z) T&uuml;rk Lirasının altında bulunan uyuşmazlıklarda il&ccedil;e t&uuml;ketici hakem heyetleri,</p>
      <p>b) B&uuml;y&uuml;kşehir stat&uuml;s&uuml;nde olan illerde 2.400 (iki bin d&ouml;rt y&uuml;z) T&uuml;rk Lirası ile 3.610 (&uuml;&ccedil; bin altı y&uuml;z on) T&uuml;rk Lirası arasındaki uyuşmazlıklarda il t&uuml;ketici hakem heyetleri,</p>
      <p>c) B&uuml;y&uuml;kşehir stat&uuml;s&uuml;nde olmayan illerin merkezlerinde 3.610 (&uuml;&ccedil; bin altı y&uuml;z on) T&uuml;rk Lirasının altında bulunan uyuşmazlıklarda il t&uuml;ketici hakem heyetleri,</p>
      <p>&ccedil;) B&uuml;y&uuml;kşehir stat&uuml;s&uuml;nde olmayan illere bağlı il&ccedil;elerde 2.400 (iki bin d&ouml;rt y&uuml;z) T&uuml;rk Lirası ile 3.610 (&uuml;&ccedil; bin altı y&uuml;z on) T&uuml;rk Lirası arasındaki uyuşmazlıklarda il t&uuml;ketici hakem heyetleri g&ouml;revli kılınmışlardır.</p>
      <p>İşbu S&ouml;zleşme ticari ama&ccedil;larla yapılmaktadır.</p>
      <p>14. Y&Uuml;R&Uuml;RL&Uuml;K</p>
      <p>ALICI, Site &uuml;zerinden verdiği siparişe ait &ouml;demeyi ger&ccedil;ekleştirdiğinde işbu s&ouml;zleşmenin t&uuml;m şartlarını kabul etmiş sayılır. SATICI, siparişin ger&ccedil;ekleşmesi &ouml;ncesinde işbu s&ouml;zleşmenin sitede ALICI tarafından okunup kabul edildiğine dair onay alacak şekilde gerekli yazılımsal d&uuml;zenlemeleri yapmakla y&uuml;k&uuml;ml&uuml;d&uuml;r.&nbsp;</p>
      <p>SATICI:&nbsp;MCA Enerji Dan. İnş. TAAH. DIŞ. TİC. GIDA TAR. VE HAYV. LTD. ŞTİ.</p>
      <p>ALICI:&nbsp;</p>
      <p>TARİH:</p>
    </div>


  </div>

</div>

@endsection