<?php

namespace App\Traits;


class HandlesEmailVerification
{
    public function handleVerification(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return true;
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
            return true;
        }

        return false;
    }
}
