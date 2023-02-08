<x-mail::message>
  # Booking Confirmation

  Hi, **{{ $name }}**

  This email is to confirm your booking on **{{ $date }}** at **{{ $time }}**.

  Regards,<br>
  {{ config('app.name') }}
</x-mail::message>