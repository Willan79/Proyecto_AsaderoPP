<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        $servicios = Servicio::all();

         #retorna la vista y pasa los servicios
        return view('servicios', compact('servicios'));
    }

    public function Datos()
    {
        #retorna la vista para dejar datos
        return view('datoservicios');
    }


    public function enviarMensaje(Request $request)
    {
        #valida los campos de entrada
        $request->validate([
            'nombre' => 'required|string|max:255',
            'servicio' => 'required|string|max:255',
            'celular' => 'required|numeric',
        ]);

        $cliente = $request->input('nombre');
        $servicio = $request->input('servicio');
        $telefono = $request->input('celular');

        #Datos de la API
        $my_apikey = "KS4I2A6VATPPHI6QI6FX";
        $destino = "573142363443";
        $mensaje = "hola maicol  \nEl cliente " . $cliente . " desea el servicio " . $servicio . ", comunicate con el al Numero:" . $telefono;

        # url de la Api
        $api_url = "http://panel.rapiwha.com/send_message.php";
        $api_url .= "?apikey=" . urlencode($my_apikey);
        $api_url .= "&number=" . urlencode($destino);
        $api_url .= "&text=" . urlencode($mensaje);

        # aqui se Llamada a la API
        $response = file_get_contents($api_url);
        $my_result_object = json_decode($response);

        // Verificar si el mensaje se envió correctamente
        if ($my_result_object && $my_result_object->success == true) {
            return redirect()->route('servicios')->with('status', 'success','El mensaje fue enviado con éxito');
        } else {
            return back()->withErrors([
                'message' => "Error al enviar mensaje: " . ($my_result_object->description ?? 'No disponible'),
                'code' => $my_result_object->result_code ?? 'No disponible',
            ]);
        }
    }
}
