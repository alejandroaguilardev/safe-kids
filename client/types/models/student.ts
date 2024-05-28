import type { AuthorizedType } from "./authorized";
import type { CourseType } from "./course";
import type { TutorType } from "./tutor";
import type { UserType } from "./user";

export enum StudentStatusEnum {
  WITHDRAWN = "withdrawn",
  NO_WITHDRAWN = "no_withdrawn",
  AUSENT = "ausent",
}

export type StudentType = {
  id: number;
  created_at: string;
  updated_at: string;
  name: string;
  last_name: string;
  document_number: string;
  course_id: number;
  tutor_id: number;
  authorized_id: number;
  course: CourseType;
  tutor: TutorType;
  authorized: AuthorizedType;
} & UserType;
