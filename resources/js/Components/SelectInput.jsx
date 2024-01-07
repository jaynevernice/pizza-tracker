import React from 'react';
import InputError from "@/Components/InputError";
import InputLabel from "@/Components/InputLabel";
import PrimaryButton from "@/Components/PrimaryButton";
import { useForm } from "@inertiajs/react";

export default function SelectInput({ id, className = '', options = [], value, onChange }) {

  const { setData } = useForm();

  return (
    <div>
      <InputLabel htmlFor={id} />
      <select
        id={id}
        className={`mt-1 block w-full ${className}`}
        value={value}
        onChange={onChange}
      >
        {options.map((option, index) => (
          <option key={index} value={option}>
            {option}
          </option>
        ))}
      </select>
      <InputError className="mt-2" />
    </div>
  );
}
