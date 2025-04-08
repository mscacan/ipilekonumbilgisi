# IP Geolocation - Konum Bilgisi

Merhaba! Bu proje, **IP Geolocation API**'yi kullanarak IP adresine dayalı konum bilgilerini öğrenmenizi sağlar. Kullanıcıların IP adreslerinden, ülkelerine, şehirlerine, enlem ve boylam bilgilerine, ISP'lerine ve zaman dilimlerine kadar çeşitli verileri görüntülemenize olanak tanır. 

Proje, sadece **2 dosya** ile çalışacak şekilde basit ve hızlı bir çözüm sunuyor. **index.php** ve **api.php** dosyaları ile bu veriyi çekmek ve görselleştirmek çok kolay!

## Özellikler:
- Kullanıcıların IP adresine göre **konum bilgisi** alabilirsiniz.
- **Ülke, şehir, IP adresi, enlem, boylam** gibi bilgileri kolayca görüntüleyebilirsiniz.
- Zaman dilimi, ISP ve daha fazlası hakkında bilgi edinin.
- **Çok basit** yapısı sayesinde hızlıca kurulabilir ve kullanılabilir.

## Nasıl Kullanılır?

1. **API Anahtarınızı Alın**:
   - [IP Geolocation API](https://ipgeolocation.io/) adresine kaydolun ve **API anahtarınızı** alın.

2. **API Anahtarını Yapılandırın**:
   - Proje dosyasındaki `index.php` dosyasına gidin ve aşağıdaki satırda bulunan **API_ANAHTARINIZI_BURAYA_KOPYALAYIN** kısmını aldığınız API anahtarı ile değiştirin.
     ```php
     $apiKey = 'API_ANAHTARINIZI_BURAYA_KOPYALAYIN';
     ```

3. **Projeyi Çalıştırın**:
   - Dosyaları sunucunuza veya lokal makinanıza yükleyin.
   - Tarayıcınızda **index.php** dosyasını açarak IP adresi ve konum bilgilerini görüntüleyin.

## Örnek Görüntü

![Konum Bilgisi](https://i.hizliresim.com/237995x.png)

## Kullanılabilecek Teknolojiler:
- PHP
- cURL
- JSON

## Katkı Sağlama
Bu projeye katkıda bulunmak isterseniz, **pull request** gönderebilir veya issues bölümünden geribildirim bırakabilirsiniz.

## License
Bu proje **MIT License** ile lisanslanmıştır.

---

Bu projeyi **mscacan** tarafından geliştirilmiştir. Eğer sorularınız veya önerileriniz varsa, lütfen bana [GitHub](https://github.com/mscacan) üzerinden ulaşın!
