<?php

namespace App\Http\Controllers;

use App\View\Components\field;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Laravel\Ui\Presets\Vue;

class LetterController extends Controller
{

    public static function test () {
        return(view('../js/components/field.vue'));
    }

    public static function video()
    {
        //send
        return response()->json('src', 200);


        return json_decode(['random']);
        $to      = 'keltdeep@gmail.com';
        $subject = 'the subject';
        $message = 'hello';
        $headers = array(
            'From' => 'keltdeep2@yandex.ru',
            'Reply-To' => 'keltdeep2@yandex.ru',
        );

        mail($to, $subject, $message, $headers);
var_dump(mail($to, $subject, $message, $headers));
        die();

         $ch = curl_init();
        //указываем url адрес на сервере
        curl_setopt($ch, CURLOPT_URL, 'https://video-api.esoft.digital/v1/');
        // чтобы возвращало
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // указываем метод POST
        curl_setopt($ch, CURLOPT_POST, 1);
        // этот параметр для указания логина и пароля
//        curl_setopt($ch, CURLOPT_USERPWD, "login:password");
        curl_setopt($ch, CURLOPT_POSTFIELDS, [
                'value' => curl_file_create($_FILES['webVideo']['tmp_name'] , $_FILES['webVideo']['tmp_name'], $_FILES['webVideo']['name']),
                'title' => 'asd',
                'desc' => 'asdasd',
                'videohosting' => 'youtube,rutube'
            ]
        );
        // проверка peer для ssl отключена, смотрите также CURLOPT_SSL_VERIFYHOST для полного игнорирования ssl сертификата
//        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        // все опции выставлены - выполняем запрос
        $result = curl_exec($ch);
        // распечатываем ответ сервера
        var_dump($result);
        // закрываем соединение
        curl_close($ch);


//        return json_encode($_POST['videoURL']);
       return http_response_code(200);

//       $array = array([
//            'url' => $_POST['videoURL'],
//            'title' => 'video',
//            'desc' => 'asd',
//            'videohosting' => 'youtube',
//        ]);
//         $curl = curl_init();
//            curl_setopt($curl, CURLOPT_URL, 'https://video-api.esoft.digital/v1/');
//            curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
//            curl_setopt($curl, CURLOPT_POST, true);
//            curl_setopt($curl, CURLOPT_POSTFIELDS, $array);
//            $out = curl_exec($curl);
//            echo $out;
//            curl_close($curl);
//
//        var_dump($out, $_POST);
//
//        die();
    }

    /**
     * @return View
     */
    public static function dateLetterShow ()
    {
        return view('sendInFuture');
    }

    /**
     * Отображение формы отправки регистрации и письма Метод GET
     * @return View
     */
    public static function viewForm ()
    {
        return view('showForm');
    }

    /**
     * Отображение формы отправки регистрации и письма Метод POST
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public static function formShow(Request $request)
    {

        Validator::make($_POST, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'min:11', 'unique:users']
        ]);
//        return json_encode($_POST);
        return response()->view('showForm');
    }

}
